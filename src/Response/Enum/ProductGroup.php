<?php

namespace Inserve\RoutITAPI\Response\Enum;

enum ProductGroup: string
{
    case Unknown      = 'Unknown';
    case Connectivity = 'Connectivity';
    case Security     = 'Security';
    case Storage      = 'Storage';
    case Internet     = 'Internet';
    case Voip         = 'Voip';
    case Additional   = 'Additional';
    case Mobile       = 'Mobile';
    case Cloud        = 'Cloud';
    case Services247  = 'Services247';

    public static function fromNullable(?string $value): ?self
    {
        return $value ? self::tryFrom($value) : null;
    }
}