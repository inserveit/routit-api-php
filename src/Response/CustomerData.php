<?php

namespace Inserve\RoutITAPI\Response;

use DateTimeImmutable;
use DateTimeInterface;
use Symfony\Component\Serializer\Attribute\SerializedName;

/**
 *
 */
final class CustomerData
{
    #[SerializedName('Id')]
    protected ?int $id = null;

    #[SerializedName('Name')]
    protected ?string $name = null;

    #[SerializedName('Street')]
    protected ?string $street = null;

    #[SerializedName('HouseNr')]
    protected ?int $houseNr = null;

    #[SerializedName('HouseNrExtension')]
    protected ?string $houseNrExtension = null;

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

    #[SerializedName('DateCreated')]
    protected ?DateTimeInterface  $dateCreated = null;

    #[SerializedName('IsActive')]
    protected ?bool $isActive = null;

    #[SerializedName('Fax')]
    protected ?string $fax = null;

    #[SerializedName('Email')]
    protected ?string $email = null;

    #[SerializedName('Website')]
    protected ?string $website = null;

    #[SerializedName('DebitNr')]
    protected ?string $debitNr = null;

    #[SerializedName('LegalStatus')]
    protected ?string $legalStatus = null;

    #[SerializedName('ExternalId')]
    protected ?string $externalId = null;

    #[SerializedName('ChamberOfCommerceNr')]
    protected ?string $chamberOfCommerceNr = null;

    #[SerializedName('IBAN')]
    protected ?string $iBAN = null;

    #[SerializedName('BIC')]
    protected ?string $bIC = null;

    #[SerializedName('VATNr')]
    protected ?string $vATNr = null;

    #[SerializedName('FirstBillingDate')]
    protected ?DateTimeInterface  $firstBillingDate = null;

    #[SerializedName('KrnId')]
    protected ?string $krnId = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     *
     * @return $this
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

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
     * @return DateTimeInterface|null
     */
    public function getDateCreated(): ?DateTimeInterface
    {
        return $this->dateCreated;
    }

    /**
     * @param DateTimeInterface|string|null $dateCreated
     *
     * @return $this
     */
    public function setDateCreated(DateTimeInterface|string|null $dateCreated): self
    {
        if (is_string($dateCreated)) {
            $dateCreated = new DateTimeImmutable($dateCreated);
        }

        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * @param bool|null $isActive
     *
     * @return $this
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }

    /**
     * @param string|null $fax
     *
     * @return $this
     */
    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     *
     * @return $this
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * @param string|null $website
     *
     * @return $this
     */
    public function setWebsite(?string $website): self
    {
        $this->website = $website;

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
    public function getLegalStatus(): ?string
    {
        return $this->legalStatus;
    }

    /**
     * @param string|null $legalStatus
     *
     * @return $this
     */
    public function setLegalStatus(?string $legalStatus): self
    {
        $this->legalStatus = $legalStatus;

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
    public function getIBAN(): ?string
    {
        return $this->iBAN;
    }

    /**
     * @param string|null $iBAN
     *
     * @return $this
     */
    public function setIBAN(?string $iBAN): self
    {
        $this->iBAN = $iBAN;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getBIC(): ?string
    {
        return $this->bIC;
    }

    /**
     * @param string|null $bIC
     *
     * @return $this
     */
    public function setBIC(?string $bIC): self
    {
        $this->bIC = $bIC;

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
     * @return DateTimeInterface|null
     */
    public function getFirstBillingDate(): ?DateTimeInterface
    {
        return $this->firstBillingDate;
    }

    /**
     * @param mixed $firstBillingDate
     *
     * @return $this
     */
    public function setFirstBillingDate(mixed $firstBillingDate): self
    {
        // Case 1: explicit null
        if ($firstBillingDate === null) {
            $this->firstBillingDate = null;
            return $this;
        }

        // Case 2: empty string from XML
        if ($firstBillingDate === '') {
            $this->firstBillingDate = null;
            return $this;
        }

        // Case 3: XML decoder gave us an array with xsi:nil / nil="true"
        if (is_array($firstBillingDate)) {
            // Try to detect any kind of "nil=true"
            $flat = array_change_key_case($firstBillingDate, CASE_LOWER);

            if (
                ($flat['@xsi:nil'] ?? $flat['@nil'] ?? $flat['nil'] ?? null) === 'true'
            ) {
                $this->firstBillingDate = null;
                return $this;
            }

            // If it’s some unexpected shape, you can log and bail out
            $this->firstBillingDate = null;
            return $this;
        }

        // Case 4: normal string date like "2023-03-15"
        if (is_string($firstBillingDate)) {
            try {
                $firstBillingDate = new DateTimeImmutable($firstBillingDate);
            } catch (\Throwable $e) {
                // invalid date → store null and continue
                $this->firstBillingDate = null;
                return $this;
            }
        }

        // Case 5: already a DateTimeInterface
        if ($firstBillingDate instanceof DateTimeInterface) {
            $this->firstBillingDate = $firstBillingDate;
        } else {
            // Fallback: unknown type → null
            $this->firstBillingDate = null;
        }

        return $this;
    }

    /**
     * @return string|null
     */
    public function getKrnId(): ?string
    {
        return $this->krnId;
    }

    /**
     * @param string|null $krnId
     *
     * @return $this
     */
    public function setKrnId(?string $krnId): self
    {
        $this->krnId = $krnId;

        return $this;
    }
}
