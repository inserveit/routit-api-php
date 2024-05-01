<?php

namespace Inserve\RoutITAPI\Request;

/**
 *
 */
interface RoutITRequestInterface
{
    /**
     * The XML root node for the request object
     *
     * @return string
     */
    public function getRootNode(): string;
}
