<?php

namespace Inserve\RoutITAPI\Response;

use Symfony\Component\Serializer\Attribute\SerializedName;

/**
 *
 */
final class ErrorResponse
{
    #[SerializedName('ErrorCode')]
    protected ?int $errorCode = null;

    #[SerializedName('ErrorMessage')]
    protected ?string $errorMessage = null;

    /** @var array<string,string>|null */
    #[SerializedName('ErrorDetails')]
    protected ?array $errorDetails = null;

    /**
     * @return int|null
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }

    /**
     * @param int|null $errorCode
     *
     * @return $this
     */
    public function setErrorCode(?int $errorCode): self
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * @param string|null $errorMessage
     *
     * @return $this
     */
    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }

    /**
     * @return array<string,string>|null
     */
    public function getErrorDetails(): ?array
    {
        return $this->errorDetails;
    }

    /**
     * @param array<string,string>|null $errorDetails
     *
     * @return $this
     */
    public function setErrorDetails(?array $errorDetails): self
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }
}
