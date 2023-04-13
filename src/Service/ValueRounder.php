<?php

declare(strict_types=1);

namespace PragmaGoTech\Interview\Service;

class ValueRounder
{
    /**
     * Rounds value up to nearest 5 multiplier
     * @param int|float $amount
     * @return float
     */
    public static function roundToFiveMultiples(int|float $amount): float
    {
        return ceil(($amount / 5)) * 5;
    }
}