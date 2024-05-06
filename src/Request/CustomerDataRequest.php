<?php

namespace Inserve\RoutITAPI\Request;

use Symfony\Component\Serializer\Attribute\SerializedName;

/**
 *
 */
class CustomerDataRequest extends AbstractRoutITPaginatedRequest
{
    protected string $rootNode = 'CustomerDataRequest_V1';

    #[SerializedName('Name')]
    protected ?string $name = null;

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
}
