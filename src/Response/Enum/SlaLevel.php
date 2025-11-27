<?php

namespace Inserve\RoutITAPI\Response\Enum;

enum SlaLevel: string
{
    case Nvt = 'Nvt';   // Geen SLA van toepassing
    case A   = 'A';     // SLA A
    case B   = 'B';     // SLA B
    case N   = 'N';     // SLA N

    public static function fromNullable(?string $value): ?self
    {
        return $value ? self::tryFrom($value) : null;
    }
}
