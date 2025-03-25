<?php

namespace Inserve\RoutITAPI\Request;

use Symfony\Component\Serializer\Attribute\SerializedName;

/**
 *
 */
final class OrderSummaryRequest extends AbstractRoutITPaginatedRequest
{
    protected string $rootNode = 'OrderSummaryRequest_V1';

    #[SerializedName('CustomerId')]
    protected ?int $customerId = null;

    #[SerializedName('ProductGroup')]
    protected ?string $productGroup = null;

    #[SerializedName('DateModifiedFrom')]
    protected ?string $dateModifiedFrom = null;

    /**
     * @return int|null
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

    /**
     * @return string|null
     */
    public function getProductGroup(): ?string
    {
        return $this->productGroup;
    }

    /**
     * @param string|null $productGroup
     *
     * @return $this
     */
    public function setProductGroup(?string $productGroup): self
    {
        $this->productGroup = $productGroup;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateModifiedFrom(): ?string
    {
        return $this->dateModifiedFrom;
    }

    /**
     * @param string|null $dateModifiedFrom
     *
     * @return $this
     */
    public function setDateModifiedFrom(?string $dateModifiedFrom): self
    {
        $this->dateModifiedFrom = $dateModifiedFrom;

        return $this;
    }
}
