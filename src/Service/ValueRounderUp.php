<?php

declare(strict_types=1);

namespace PragmaGoTech\Interview\Service;

class ValueRounderUp
{
    public static function roundToFiveMultiples(int|float $amount): int
    {
        return (int)ceil(($amount / 5)) * 5;
    }
}