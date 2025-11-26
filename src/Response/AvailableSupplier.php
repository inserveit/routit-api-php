<?php

namespace Inserve\RoutITAPI\Response;

use Symfony\Component\Serializer\Attribute\SerializedName;
use Symfony\Component\Serializer\Attribute\SerializedPath;

/**
 *
 */
final class AvailableSupplier
{
    #[SerializedName('Name')]
    protected ?string $name = null;

    #[SerializedName('ErrorMessage')]
    protected ?string $errorMessage = null;

    #[SerializedName('LocationInfo')]
    protected ?string $locationInfo = null;

    /** @var AvailableSpeed[]|null */
    #[SerializedPath('[AvailableSpeeds][AvailableSpeed_V4]')]
    protected ?array $availableSpeed = null;

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
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * @param string|null $errorMessage
     *
     * @return $this
     */
    public function setErrorMessage(?string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLocationInfo(): ?string
    {
        return $this->locationInfo;
    }

    /**
     * @param string|null $locationInfo
     *
     * @return $this
     */
    public function setLocationInfo(?string $locationInfo): self
    {
        $this->locationInfo = $locationInfo;

        return $this;
    }

    /**
     * @param AvailableSpeed[] $availableSpeed
     *
     * @return $this
     */
    public function setAvailableSpeed(array $availableSpeed): self
    {
        $this->availableSpeed = $availableSpeed;

        return $this;
    }

    /**
     * @return AvailableSpeed[]|null
     */
    public function getAvailableSpeed(): ?array
    {
        return $this->availableSpeed;
    }
}
