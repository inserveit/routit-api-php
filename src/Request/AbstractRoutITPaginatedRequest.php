<?php

namespace Inserve\RoutITAPI\Request;

use Symfony\Component\Serializer\Attribute\SerializedName;

/**
 *
 */
abstract class AbstractRoutITPaginatedRequest extends AbstractRoutITRequest
{
    #[SerializedName('Id')]
    protected ?int $id = null;

    #[SerializedName('Skip')]
    protected ?int $skip = null;

    #[SerializedName('Take')]
    protected ?int $take = null;

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
     * @return int|null
     */
    public function getSkip(): ?int
    {
        return $this->skip;
    }

    /**
     * @param int|null $skip
     *
     * @return $this
     */
    public function setSkip(?int $skip): self
    {
        $this->skip = $skip;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getTake(): ?int
    {
        return $this->take;
    }

    /**
     * @param int|null $take
     *
     * @return $this
     */
    public function setTake(?int $take): self
    {
        $this->take = $take;

        return $this;
    }
}
