<?php

declare(strict_types=1);

namespace PragmaGoTech\Interview\Model;

use PragmaGoTech\Interview\Interface\FeeCalculatorInterface;

class FeeCalculator implements FeeCalculatorInterface
{

    /**
     * @inheritDoc
     */
    public function calculate(LoanProposal $application): float
    {
        $feeCalculationStrategy = match ($application->getTerm()) {
            12 => new Term12FeeCalculationStrategy(),
            24 => new Term24FeeCalculationStrategy(),
            default => throw new \InvalidArgumentException("Wrong term"),
        };

        return $feeCalculationStrategy->calculateFee($application->getAmount());
    }
}