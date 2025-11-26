<?php

namespace Inserve\RoutITAPI\Request;

use Inserve\RoutITAPI\Request\Enum\Portfolio;
use Inserve\RoutITAPI\Request\Enum\Supplier;
use Symfony\Component\Serializer\Attribute\SerializedName;

/**
 *
 */
final class ZipCodeCheckRequest extends AbstractRoutITRequest
{
    protected string $rootNode = 'ZipCodeCheckRequest_V6';

    #[SerializedName('Portfolio')]
    protected ?string $portfolio = null;

    #[SerializedName('ZipCode')]
    protected ?string $zipCode = null;

    #[SerializedName('HouseNr')]
    protected ?int $houseNr = null;

    #[SerializedName('HouseNrExtension')]
    protected ?string $houseNrExtension = null;

    #[SerializedName('ServiceId')]
    protected ?string $serviceId = null;

    #[SerializedName('RoomNumber')]
    protected ?string $roomNumber = null;

    #[SerializedName('IsRoomNumberKnown')]
    protected ?bool $isRoomNumberKnown = null;

    #[SerializedName('Suppliers')]
    protected ?array $suppliers = null; // 👈 this will hold ['string' => ['KPN', 'Tele2']]

    /**
     * @return string|null
     */
    public function getPortfolio(): ?string
    {
        return $this->portfolio;
    }

    /**
     * @param Portfolio|string|null $portfolio
     */
    public function setPortfolio(Portfolio|string|null $portfolio): self
    {
        if ($portfolio instanceof Portfolio) {
            $this->portfolio = $portfolio->value;
        } else {
            $this->portfolio = $portfolio;
        }

        return $this;
    }

    /**
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @param string|null $zipCode
     *
     * @return $this
     */
    public function setZipCode(?string $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getHouseNr(): ?int
    {
        return $this->houseNr;
    }

    /**
     * @param int|null $houseNr
     *
     * @return $this
     */
    public function setHouseNr(?int $houseNr): self
    {
        $this->houseNr = $houseNr;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getHouseNrExtension(): ?string
    {
        return $this->houseNrExtension;
    }

    /**
     * @param string|null $houseNrExtension
     *
     * @return $this
     */
    public function setHouseNrExtension(?string $houseNrExtension): self
    {
        $this->houseNrExtension = $houseNrExtension;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getServiceId(): ?string
    {
        return $this->serviceId;
    }

    /**
     * @param string|null $serviceId
     *
     * @return $this
     */
    public function setServiceId(?string $serviceId): self
    {
        $this->serviceId = $serviceId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRoomNumber(): ?string
    {
        return $this->roomNumber;
    }

    /**
     * @param string|null $roomNumber
     *
     * @return $this
     */
    public function setRoomNumber(?string $roomNumber): self
    {
        $this->roomNumber = $roomNumber;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsRoomNumberKnown(): ?bool
    {
        return $this->isRoomNumberKnown;
    }

    /**
     * @param bool|null $isRoomNumberKnown
     *
     * @return $this
     */
    public function setIsRoomNumberKnown(?bool $isRoomNumberKnown): self
    {
        $this->isRoomNumberKnown = $isRoomNumberKnown;

        return $this;
    }

    /**
     * @return array<string, array<string>>|null
     */
    public function getSuppliers(): ?array
    {
        return $this->suppliers; // ✅ return the nested structure
    }

    /**
     * @param array<Supplier|string>|null $suppliers
     */
    public function setSuppliers(?array $suppliers): self
    {
        if ($suppliers === null) {
            $this->suppliers = null;
            return $this;
        }

        $normalized = [];

        foreach ($suppliers as $supplier) {
            if ($supplier instanceof Supplier) {
                $normalized[] = $supplier->value;
            } elseif ($supplier !== null) {
                $normalized[] = (string) $supplier;
            }
        }

        // This shape matches ArrayOfString → <Suppliers><string>...</string></Suppliers>
        $this->suppliers = [
            'string' => $normalized,
        ];

        return $this;
    }
}
