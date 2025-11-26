<?php

namespace Inserve\RoutITAPI\Response;

use Symfony\Component\Serializer\Attribute\SerializedPath;

/**
 *
 */
final class ZipCodeCheckResponse
{
    /** @var AvailableSupplier[]|null */
    #[SerializedPath('[AvailableSuppliers][AvailableSupplier_V5]')]
    protected ?array $availableSupplier = null;

    /**
     * @param AvailableSupplier[] $availableSupplier
     *
     * @return $this
     */
    public function setAvailableSupplier(array $availableSupplier): self
    {
        $this->availableSupplier = $availableSupplier;

        return $this;
    }

    /**
     * @return AvailableSupplier[]|null
     */
    public function getAvailableSupplier(): ?array
    {
        return $this->availableSupplier;
    }
}
