<?php

namespace Inserve\RoutITAPI\Response;

use Symfony\Component\Serializer\Attribute\SerializedPath;

/**
 *
 */
class CustomerDataResponse extends AbstractPagedResultResponse
{
    /** @var CustomerData[]|null */
    #[SerializedPath('[PagedResult][Results][CustomerData_V4]')]
    protected ?array $customerData = null;

    /**
     * @param CustomerData[] $customerData
     *
     * @return $this
     */
    public function setCustomerData(array $customerData): self
    {
        $this->customerData = $customerData;

        return $this;
    }

    /**
     * @return CustomerData[]|null
     */
    public function getCustomerData(): ?array
    {
        return $this->customerData;
    }
}
