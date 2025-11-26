<?php

namespace Inserve\RoutITAPI\Response\Enum;

enum NlsType: string
{
    case Nls1    = 'Nls1';
    case Nls2    = 'Nls2';
    case Nls3    = 'Nls3';
    case Nls4    = 'Nls4';
    case Nls6    = 'Nls6';
    case Nls7    = 'Nls7';
    case Nls8    = 'Nls8';
    case Nls9    = 'Nls9';
    case Nls11   = 'Nls11';
    case Nls21   = 'Nls21';
    case Nls23   = 'Nls23';
    case Nls24   = 'Nls24';
    case NlsIO   = 'NlsIO';
    case NlsNO   = 'NlsNO';
    case NlsHbob = 'NlsHbob';
    case NlsHbor = 'NlsHbor';

    /**
     * Safely cast a value into the enum, fallback to null
     */
    public static function fromNullable(?string $value): ?self
    {
        return $value !== null ? self::tryFrom($value) : null;
    }
}