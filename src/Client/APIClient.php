<?php

namespace Inserve\RoutITAPI\Client;

use Exception;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Inserve\RoutITAPI\Exception\RoutITAPIException;
use Inserve\RoutITAPI\Request\RoutITRequestInterface;
use Inserve\RoutITAPI\Response\ErrorResponse;
use Psr\Log\LoggerAwareTrait;
use SensitiveParameter;
use Symfony\Component\PropertyAccess\Exception\UnexpectedTypeException;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AttributeLoader;
use Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 *
 */
final class APIClient
{
    use LoggerAwareTrait;

    protected const XML_ERROR_RESPONSE_TAG = 'NinaResponse';

    protected Serializer $serializer;
    protected ObjectNormalizer $normalizer;
    protected ?string $basicAuthentication = null;
    protected string $apiUrl = '';

    /**
     * @param ClientInterface $client
     */
    public function __construct(protected ClientInterface $client)
    {
        $classMetadataFactory = new ClassMetadataFactory(new AttributeLoader());
        $extractor = new PropertyInfoExtractor(
            typeExtractors: [
                new PhpDocExtractor(),
                new ReflectionExtractor(),
            ]
        );
        $this->normalizer = new ObjectNormalizer(
            classMetadataFactory: $classMetadataFactory,
            nameConverter: new MetadataAwareNameConverter($classMetadataFactory),
            propertyTypeExtractor: $extractor,
            defaultContext: [
                AbstractObjectNormalizer::SKIP_NULL_VALUES => true,
                AbstractObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true,
            ]
        );

        $this->serializer = new Serializer(
            [$this->normalizer, new ArrayDenormalizer()],
            [new XmlEncoder()]
        );
    }

    /**
     * @param string $username
     * @param string $password
     *
     * @return $this
     */
    public function setCredentials(string $username, #[SensitiveParameter] string $password): self
    {
        $this->basicAuthentication = base64_encode(sprintf('%s:%s', $username, $password));

        return $this;
    }

    /**
     * @param string $url
     *
     * @return self
     */
    public function setApiUrl(string $url): self
    {
        $this->apiUrl = $url;

        return $this;
    }

    /**
     * @param RoutITRequestInterface $request
     *
     * @return string
     *
     * @throws RoutITAPIException
     */
    public function request(RoutITRequestInterface $request): string
    {
        try {
            $apiRequest = new Request(
                method: 'POST',
                uri: $this->getApiUrl('/realtime'),
                headers: $this->getDefaultHeaders(),
                body: $this->serializeRequest($request)
            );

            $response = (string) $this->client->send($apiRequest)->getBody();
            if (str_contains($response, self::XML_ERROR_RESPONSE_TAG)) {
                /** @var ErrorResponse $errorResponse */
                $errorResponse = $this->deserialize($response, ErrorResponse::class);

                throw new RoutITAPIException(
                    (string) $errorResponse->getErrorMessage(),
                    (int) $errorResponse->getErrorCode()
                );
            }

            return $response;
        } catch (GuzzleException|BadResponseException $exception) {
            $this->logError($exception->getMessage());

            throw new RoutITAPIException(
                $exception->getMessage(),
                $exception->getCode(),
            );
        }
    }

    /**
     * @param string $response
     * @param string $class
     *
     * @return mixed
     */
    public function deserialize(string $response, string $class): mixed
    {
        try {
            return $this->serializer->deserialize($response, $class, XmlEncoder::FORMAT);
        } catch (Exception $exception) {
            if (!$exception instanceof UnexpectedTypeException) {
                $this->logError(sprintf('(%s): %s', __FUNCTION__, $exception->getMessage()));
            }

            return null;
        }
    }

    /**
     * @param RoutITRequestInterface $request
     *
     * @return string
     */
    protected function serializeRequest(RoutITRequestInterface $request): string
    {
        return $this->serializer->serialize(
            $request,
            XmlEncoder::FORMAT,
            [
                XmlEncoder::ROOT_NODE_NAME => $request->getRootNode(),
                XmlEncoder::ENCODER_IGNORED_NODE_TYPES => [XML_PI_NODE],
            ]
        );
    }

    /**
     * @param string $url
     *
     * @return string
     */
    protected function getApiUrl(string $url): string
    {
        return sprintf('/%s%s', $this->apiUrl, $url);
    }

    /**
     * @return string[]
     */
    protected function getDefaultHeaders(): array
    {
        $headers = [
            'Content-Type' => 'application/xml',
        ];

        if ($this->basicAuthentication !== null) {
            $headers['Authorization'] = sprintf('Basic %s', $this->basicAuthentication);
        }

        return $headers;
    }

    /**
     * @param string $message
     *
     * @return void
     */
    private function logError(string $message): void
    {
        if (!$this->logger) {
            return;
        }

        $this->logger->error($message);
    }
}
