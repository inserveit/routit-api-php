<?php

namespace Inserve\RoutITAPI\Response;

use Inserve\RoutITAPI\Response\Enum\ProductGroup;
use Inserve\RoutITAPI\Response\Enum\SlaLevel;
use Symfony\Component\Serializer\Attribute\SerializedName;

/**
 *
 */
final class ProductPriceDetails
{
    #[SerializedName('ProductCode')]
    protected ?string $productCode = null;

    #[SerializedName('ProductName')]
    protected ?string $productName = null;

    #[SerializedName('GrossPrice')]
    protected int|float|null $grossPrice = null;

    #[SerializedName('NettPrice')]
    protected int|float|null $nettPrice = null;

    #[SerializedName('Discount')]
    protected int|float|null $discount = null;

    #[SerializedName('SetupCosts')]
    protected int|float|null $setupCosts = null;
    
    #[SerializedName('CancelCosts')]
    protected int|float|null $cancelCosts = null;

    #[SerializedName('SlaLevel')]
    protected ?string $slaLevel = null;

    #[SerializedName('ContractDuration')]
    protected ?int $contractDuration = null;

    #[SerializedName('ProductType')]
    protected ?string $productType = null;

    #[SerializedName('CommercialProductTypeName')]
    protected ?string $commercialProductTypeName = null;

    #[SerializedName('ProductGroup')]
    protected ?string $productGroup = null;

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
    public function getGrossPrice(): float|int|null
    {
        return $this->grossPrice;
    }

    /**
     * @param mixed $grossPrice
     *
     * @return $this
     */
    public function setGrossPrice(mixed $grossPrice): self
    {
        if (! is_numeric($grossPrice)) {
            $grossPrice = null;
        }

        $this->grossPrice = (float) $grossPrice;

        return $this;
    }

    /**
     * @return float|int|null
     */
    public function getNettPrice(): float|int|null
    {
        return $this->nettPrice;
    }

    /**
     * @param mixed $nettPrice
     *
     * @return $this
     */
    public function setNettPrice(mixed $nettPrice): self
    {
        if (! is_numeric($nettPrice)) {
            $nettPrice = null;
        }

        $this->nettPrice = (float) $nettPrice;

        return $this;
    }

    /**
     * @return float|int|null
     */
    public function getDiscount(): float|int|null
    {
        return $this->discount;
    }

    /**
     * @param mixed $discount
     *
     * @return $this
     */
    public function setDiscount(mixed $discount): self
    {
        if (! is_numeric($discount)) {
            $discount = null;
        }

        $this->discount = (float) $discount;

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
    public function getProductType(): ?string
    {
        return $this->productType;
    }

    /**
     * @param string|null $productType
     *
     * @return $this
     */
    public function setProductType(?string $productType): self
    {
        $this->productType = $productType;

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
     * @return ProductGroup|null
     */
    public function getProductGroupEnum(): ?ProductGroup
    {
        return ProductGroup::fromNullable($this->productGroup);
    }

    /**
     * @param ProductGroup|string|null $productGroup
     *
     * @return $this
     */
    public function setProductGroup(ProductGroup|string|null $productGroup): self
    {
        if ($productGroup instanceof ProductGroup) {
            $this->productGroup = $productGroup->value;
        } else {
            $this->productGroup = $productGroup;
        }

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

    /**
     * @param SlaLevel|string|null $slaLevel
     *
     * @return $this
     */
    public function setSlaLevel(SlaLevel|string|null $slaLevel): self
    {
        if ($slaLevel instanceof SlaLevel) {
            $this->slaLevel = $slaLevel->value;
        } else {
            $this->slaLevel = $slaLevel;
        }

        return $this;
     }
 
     /**
     * @return string|null
     */
    public function getSlaLevel(): ?string
    {
        return $this->slaLevel;
    }

    /**
     * @return SlaLevel|null
     */
    public function getSlaLevelEnum(): ?SlaLevel
    {
        return SlaLevel::fromNullable($this->slaLevel);
    }
}
