<?php

declare(strict_types=1);

namespace PragmaGoTech\Interview\Model\Strategies\FeeCalculation;

use PragmaGoTech\Interview\Service\ValueRounder;

abstract class FeeCalculationStrategy
{

    protected array $feeStructure = [];

    public function calculateFee(float $amount): float
    {
        // Find the two data points that the amount falls between
        $lower = $upper = null;
        foreach ($this->feeStructure as $key => $value) {
            if ($key == $amount) {
                return ValueRounder::roundToFiveMultiples($value); // If the amount is an exact data point, return its value
            } elseif ($key < $amount && (!$lower || $key > $lower)) {
                $lower = $key;
            } elseif ($key > $amount && (!$upper || $key < $upper)) {
                $upper = $key;
            }
        }

        // Calculate the interpolated fee using linear interpolation
        $slope = ($this->feeStructure[$upper] - $this->feeStructure[$lower]) / ($upper - $lower);
        $interpolatedFee = $this->feeStructure[$lower] + ($amount - $lower) * $slope;

        return ValueRounder::roundToFiveMultiples($interpolatedFee); // Round the result and return it
    }

}