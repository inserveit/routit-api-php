<?php

namespace Inserve\RoutITAPI\Request;

use Symfony\Component\Serializer\Attribute\Ignore;

/**
 *
 */
abstract class AbstractRoutITRequest implements RoutITRequestInterface
{
    protected string $rootNode = '';

    /**
     * @return string
     */
    #[Ignore]
    public function getRootNode(): string
    {
        return $this->rootNode;
    }
}
