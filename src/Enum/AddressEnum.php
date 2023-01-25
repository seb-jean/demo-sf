<?php

namespace App\Enum;

enum AddressEnum: string
{
    case Street = 'street';
    case Boulevard = 'boulevard';
    case Avenue = 'avenue';
}