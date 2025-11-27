<?php

namespace Inserve\RoutITAPI\Response;

use Symfony\Component\Serializer\Attribute\SerializedPath;

/**
 *
 */
final class ProductPriceDetailsResponse
{
    /** @var ProductPriceDetails[]|null */
    #[SerializedPath('[ProductsPriceDetails][ProductPriceDetails_V2]')]
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
