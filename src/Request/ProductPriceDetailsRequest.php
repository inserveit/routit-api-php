<?php

namespace Inserve\RoutITAPI\Request;

/**
 *
 */
final class ProductPriceDetailsRequest extends AbstractRoutITRequest
{
    protected string $rootNode = 'ProductPriceDetailsRequest_V2';

    #[SerializedName('CustomerId')]
    protected ?int $customerId = null;

    /**
     * @return string|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * @param int|null $customerId
     *
     * @return $this
     */
    public function setCustomerId(?int $customerId): self
    {
        $this->customerId = $customerId;

        return $this;
    }
}
