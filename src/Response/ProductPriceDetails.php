<?php

namespace Inserve\RoutITAPI\Response;

use Symfony\Component\Serializer\Attribute\SerializedName;

/**
 *
 */
class ProductPriceDetails
{
    #[SerializedName('ProductCode')]
    protected ?string $productCode = null;

    #[SerializedName('ProductName')]
    protected ?string $productName = null;

    #[SerializedName('ContractDuration')]
    protected ?int $contractDuration = null;

    #[SerializedName('GrossPricePartner')]
    protected int|float|null $grossPricePartner = null;

    #[SerializedName('SetupCosts')]
    protected int|float|null $setupCosts = null;

    #[SerializedName('DiscountPercentage')]
    protected int|float|null $discountPercentage = null;

    #[SerializedName('CommercialProductTypeName')]
    protected ?string $commercialProductTypeName = null;

    #[SerializedName('ProductGroup')]
    protected ?string $productGroup = null;

    #[SerializedName('CancelCosts')]
    protected int|float|null $cancelCosts = null;

    /**
     * @return string|null
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    /**
     * @param string|null $productCode
     *
     * @return $this
     */
    public function setProductCode(?string $productCode): self
    {
        $this->productCode = $productCode;

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
     * @return int|null
     */
    public function getContractDuration(): ?int
    {
        return $this->contractDuration;
    }

    /**
     * @param int|null $contractDuration
     *
     * @return $this
     */
    public function setContractDuration(?int $contractDuration): self
    {
        $this->contractDuration = $contractDuration;

        return $this;
    }

    /**
     * @return float|int|null
     */
    public function getGrossPricePartner(): float|int|null
    {
        return $this->grossPricePartner;
    }

    /**
     * @param mixed $grossPricePartner
     *
     * @return $this
     */
    public function setGrossPricePartner(mixed $grossPricePartner): self
    {
        if (! is_numeric($grossPricePartner)) {
            $grossPricePartner = null;
        }

        $this->grossPricePartner = (float) $grossPricePartner;

        return $this;
    }

    /**
     * @return float|int|null
     */
    public function getSetupCosts(): float|int|null
    {
        return $this->setupCosts;
    }

    /**
     * @param float|int|null $setupCosts
     *
     * @return $this
     */
    public function setSetupCosts(float|int|null $setupCosts): self
    {
        $this->setupCosts = $setupCosts;

        return $this;
    }

    /**
     * @return float|int|null
     */
    public function getDiscountPercentage(): float|int|null
    {
        return $this->discountPercentage;
    }

    /**
     * @param float|int|null $discountPercentage
     *
     * @return $this
     */
    public function setDiscountPercentage(float|int|null $discountPercentage): self
    {
        $this->discountPercentage = $discountPercentage;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCommercialProductTypeName(): ?string
    {
        return $this->commercialProductTypeName;
    }

    /**
     * @param string|null $commercialProductTypeName
     *
     * @return $this
     */
    public function setCommercialProductTypeName(?string $commercialProductTypeName): self
    {
        $this->commercialProductTypeName = $commercialProductTypeName;

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
     * @return float|int|null
     */
    public function getCancelCosts(): float|int|null
    {
        return $this->cancelCosts;
    }

    /**
     * @param float|int|null $cancelCosts
     *
     * @return $this
     */
    public function setCancelCosts(float|int|null $cancelCosts): self
    {
        $this->cancelCosts = $cancelCosts;

        return $this;
    }
}
