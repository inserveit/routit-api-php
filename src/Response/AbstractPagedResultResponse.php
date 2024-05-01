<?php

namespace Inserve\RoutITAPI\Response;

use Symfony\Component\Serializer\Attribute\SerializedPath;

/**
 *
 */
abstract class AbstractPagedResultResponse
{
    #[SerializedPath('[PagedResult][Skip]')]
    protected ?int $skip = null;

    #[SerializedPath('[PagedResult][Take]')]
    protected ?int $take = null;

    #[SerializedPath('[PagedResult][TotalNumberOfRecords]')]
    protected ?int $totalNumberOfRecords = null;

    /**
     * @return int|null
     */
    public function getSkip(): ?int
    {
        return $this->skip;
    }

    /**
     * @return int|null
     */
    public function getTake(): ?int
    {
        return $this->take;
    }

    /**
     * @return int|null
     */
    public function getTotalNumberOfRecords(): ?int
    {
        return $this->totalNumberOfRecords;
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
     * @param int|null $take
     *
     * @return $this
     */
    public function setTake(?int $take): self
    {
        $this->take = $take;

        return $this;
    }

    /**
     * @param int|null $totalNumberOfRecords
     *
     * @return $this
     */
    public function setTotalNumberOfRecords(?int $totalNumberOfRecords): self
    {
        $this->totalNumberOfRecords = $totalNumberOfRecords;

        return $this;
    }
}
