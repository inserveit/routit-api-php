<?php

namespace Inserve\RoutITAPI\Response;

use Symfony\Component\Serializer\Attribute\SerializedPath;

/**
 *
 */
class ProductPriceDetailsResponse
{
    /** @var ProductPriceDetails[]|null */
    #[SerializedPath('[ProductsPriceDetails][ProductPriceDetails_V1]')]
    protected ?array $productPriceDetails = null;

    /**
     * @param ProductPriceDetails[] $productPriceDetails
     *
     * @return $this
     */
    public function setProductPriceDetails(array $productPriceDetails): self
    {
        $this->productPriceDetails = $productPriceDetails;

        return $this;
    }

    /**
     * @return ProductPriceDetails[]|null
     */
    public function getProductPriceDetails(): ?array
    {
        return $this->productPriceDetails;
    }
}
