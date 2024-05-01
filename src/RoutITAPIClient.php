<?php

namespace Inserve\RoutITAPI;

use GuzzleHttp\Client;
use Inserve\RoutITAPI\Client\APIClient;
use Inserve\RoutITAPI\Exception\RoutITAPIException;
use Inserve\RoutITAPI\Request\CustomerDataRequest;
use Inserve\RoutITAPI\Request\OrderSummaryRequest;
use Inserve\RoutITAPI\Request\ProductPriceDetailsRequest;
use Inserve\RoutITAPI\Request\RoutITRequestInterface;
use Inserve\RoutITAPI\Response\CustomerDataResponse;
use Inserve\RoutITAPI\Response\OrderSummaryResponse;
use Inserve\RoutITAPI\Response\ProductPriceDetailsResponse;
use Psr\Log\LoggerInterface;
use SensitiveParameter;

/**
 *
 */
class RoutITAPIClient
{
    protected APIClient $apiClient;

    /**
     * @param APIClient|null       $apiClient
     * @param LoggerInterface|null $logger
     * @param string|null          $baseUri
     */
    public function __construct(?APIClient $apiClient = null, ?LoggerInterface $logger = null, ?string $baseUri = null)
    {
        if (! $apiClient) {
            $apiClient = new APIClient(
                new Client(is_string($baseUri) ? ['base_uri' => $baseUri] : [])
            );
        }

        if ($logger) {
            $apiClient->setLogger($logger);
        }

        $this->apiClient = $apiClient;
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $apiUrl
     *
     * @return $this
     */
    public function configure(string $username, #[SensitiveParameter] string $password, string $apiUrl): self
    {
        $this->apiClient
            ->setCredentials($username, $password)
            ->setApiUrl($apiUrl);

        return $this;
    }

    /**
     * @param int|null $id
     * @param int|null $take
     * @param int|null $skip
     *
     * @return CustomerDataResponse|null
     * @throws RoutITAPIException
     */
    public function getCustomerData(?int $id = null, ?int $take = null, ?int $skip = null): ?CustomerDataResponse
    {
        $request = new CustomerDataRequest();
        $request
            ->setId($id)
            ->setTake($take)
            ->setSkip($skip);

        /** @var CustomerDataResponse|null */
        return $this->apiCall($request, CustomerDataResponse::class);
    }

    /**
     * @throws RoutITAPIException
     */
    public function getOrderSummary(?int $id = null, ?int $take = null, ?int $skip = null): ?OrderSummaryResponse
    {
        $request = new OrderSummaryRequest();
        $request
            ->setId($id)
            ->setTake($take)
            ->setSkip($skip);

        /** @var OrderSummaryResponse|null */
        return $this->apiCall($request, OrderSummaryResponse::class);
    }

    /**
     * @return ProductPriceDetailsResponse|null
     *
     * @throws RoutITAPIException
     */
    public function getProductPriceDetails(): ?ProductPriceDetailsResponse
    {
        /** @var ProductPriceDetailsResponse|null */
        return $this->apiCall(new ProductPriceDetailsRequest(), ProductPriceDetailsResponse::class);
    }
    /**
     * @param RoutITRequestInterface $request
     * @param string                 $responseClass
     *
     * @return mixed
     *
     * @throws RoutITAPIException
     */
    protected function apiCall(RoutITRequestInterface $request, string $responseClass): mixed
    {
        $response = $this->apiClient->request($request);

        return $this->apiClient->deserialize($response, $responseClass);
    }
}
