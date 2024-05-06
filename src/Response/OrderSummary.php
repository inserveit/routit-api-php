<?php

namespace Inserve\RoutITAPI\Response;

use Symfony\Component\Serializer\Attribute\SerializedName;

/**
 *
 */
class OrderSummary
{
    #[SerializedName('OrderId')]
    protected ?int $orderId = null;

    #[SerializedName('CustomerId')]
    protected ?int $customerId = null;

    #[SerializedName('ProductId')]
    protected ?string $productId = null;

    #[SerializedName('ProductName')]
    protected ?string $productName = null;

    #[SerializedName('ProductGroup')]
    protected ?string $productGroup = null;

    #[SerializedName('DateActive')]
    protected ?string $dateActive = null;

    #[SerializedName('Quantity')]
    protected ?int $quantity = null;

    #[SerializedName('OrderState')]
    protected ?string $orderState = null;

    /**
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * @param int|null $orderId
     *
     * @return $this
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

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
    public function getProductId(): ?string
    {
        return $this->productId;
    }

    /**
     * @param string|null $productId
     *
     * @return $this
     */
    public function setProductId(?string $productId): self
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * @param string|null $productName
     *
     * @return $this
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;

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
    public function getDateActive(): ?string
    {
        return $this->dateActive;
    }

    /**
     * @param mixed $dateActive
     *
     * @return $this
     */
    public function setDateActive(mixed $dateActive): self
    {
        if (! is_string($dateActive)) {
            $dateActive = null;
        }

        $this->dateActive = $dateActive;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @param int|null $quantity
     *
     * @return $this
     */
    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderState(): ?string
    {
        return $this->orderState;
    }

    /**
     * @param string|null $orderState
     *
     * @return $this
     */
    public function setOrderState(?string $orderState): self
    {
        $this->orderState = $orderState;

        return $this;
    }
}
