<?php

namespace Inserve\RoutITAPI\Response;

use Symfony\Component\Serializer\Attribute\SerializedPath;

/**
 *
 */
class OrderSummaryResponse extends AbstractPagedResultResponse
{
    /** @var OrderSummary[]|null */
    #[SerializedPath('[PagedResult][Results][OrderSummary_V1]')]
    protected ?array $orderSummary = null;

    /**
     * @param OrderSummary[] $orderSummary
     *
     * @return $this
     */
    public function setOrderSummary(array $orderSummary): self
    {
        $this->orderSummary = $orderSummary;

        return $this;
    }

    /**
     * @return OrderSummary[]|null
     */
    public function getOrderSummary(): ?array
    {
        return $this->orderSummary;
    }
}
