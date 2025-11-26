<?php
namespace Inserve\RoutITAPI\Request\Enum;

enum Supplier: string
{
    case KPN               = 'KPN';
    case KPNWEAS           = 'KPNWEAS';
    case Eurofiber         = 'Eurofiber';
    case Tele2             = 'Tele2';
    case Tele2Fiber        = 'Tele2Fiber';
    case CAIW              = 'CAIW';
    case OverigeAanbieders = 'OverigeAanbieders';
}
