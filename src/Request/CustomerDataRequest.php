<?php

namespace Inserve\RoutITAPI\Request;

use Inserve\RoutITAPI\Request\Enum\CustomerDataOrderByMember;
use Symfony\Component\Serializer\Attribute\SerializedName;

/**
 *
 */
final class CustomerDataRequest extends AbstractRoutITPaginatedRequest
{
    protected string $rootNode = 'CustomerDataRequest_V1';

    #[SerializedName('Name')]
    protected ?string $name = null;

    #[SerializedName('Street')]
    protected ?string $street = null;

    #[SerializedName('ZipCode')]
    protected ?string $zipCode = null;

    #[SerializedName('City')]
    protected ?string $city = null;

    #[SerializedName('CountryCode')]
    protected ?string $countryCode = null;

    #[SerializedName('Phone1')]
    protected ?string $phone1 = null;

    #[SerializedName('Phone2')]
    protected ?string $phone2 = null;

    #[SerializedName('DebitNr')]
    protected ?string $debitNr = null;

    #[SerializedName('ExternalId')]
    protected ?string $externalId = null;

    #[SerializedName('ChamberOfCommerceNr')]
    protected ?string $chamberOfCommerceNr = null;

    #[SerializedName('VATNr')]
    protected ?string $vATNr = null;

    #[SerializedName('IncludeInactiveCustomers')]
    protected ?bool $includeInactiveCustomers = null;

    #[SerializedName('OrderByMember')]
    protected ?string $orderByMember = null;

    #[SerializedName('OrderByDescending')]
    protected ?bool $orderByDescending = null;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param string|null $name
     *
     * @return $this
     */
    public function setStreet(?string $street): self
    {
        $this->street = $street;

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
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     *
     * @return $this
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @param string|null $countryCode
     *
     * @return $this
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone1(): ?string
    {
        return $this->phone1;
    }

    /**
     * @param string|null $phone1
     *
     * @return $this
     */
    public function setPhone1(?string $phone1): self
    {
        $this->phone1 = $phone1;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone2(): ?string
    {
        return $this->phone2;
    }

    /**
     * @param string|null $phone2
     *
     * @return $this
     */
    public function setPhone2(?string $phone2): self
    {
        $this->phone2 = $phone2;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDebitNr(): ?string
    {
        return $this->debitNr;
    }

    /**
     * @param string|null $debitNr
     *
     * @return $this
     */
    public function setDebitNr(?string $debitNr): self
    {
        $this->debitNr = $debitNr;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    /**
     * @param string|null $externalId
     *
     * @return $this
     */
    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getChamberOfCommerceNr(): ?string
    {
        return $this->chamberOfCommerceNr;
    }

    /**
     * @param string|null $chamberOfCommerceNr
     *
     * @return $this
     */
    public function setChamberOfCommerceNr(?string $chamberOfCommerceNr): self
    {
        $this->chamberOfCommerceNr = $chamberOfCommerceNr;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getVATNr(): ?string
    {
        return $this->vATNr;
    }

    /**
     * @param string|null $vATNr
     *
     * @return $this
     */
    public function setVATNr(?string $vATNr): self
    {
        $this->vATNr = $vATNr;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getIncludeInactiveCustomers(): ?bool
    {
        return $this->includeInactiveCustomers;
    }

    /**
     * @param string|null $includeInactiveCustomers
     *
     * @return $this
     */
    public function setIncludeInactiveCustomers(?bool $includeInactiveCustomers): self
    {
        $this->includeInactiveCustomers = $includeInactiveCustomers;

        return $this;
    }

    public function getOrderByMember(): ?string
    {
        return $this->orderByMember;
    }

    public function setOrderByMember(CustomerDataOrderByMember|string|null $orderByMember): self
    {
        if ($orderByMember instanceof CustomerDataOrderByMember) {
            $this->orderByMember = $orderByMember->value;
        } else {
            $this->orderByMember = $orderByMember;
        }
        return $this;
    }
    /**
     * @return string|null
     */
    public function getOrderByDescending(): ?bool
    {
        return $this->orderByDescending;
    }

    /**
     * @param string|null $orderByDescending
     *
     * @return $this
     */
    public function setOrderByDescending(?bool $orderByDescending): self
    {
        $this->orderByDescending = $orderByDescending;

        return $this;
    }
}
