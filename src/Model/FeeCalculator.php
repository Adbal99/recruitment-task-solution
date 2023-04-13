<?php

declare(strict_types=1);

namespace PragmaGoTech\Interview\Model;

use PragmaGoTech\Interview\Interface\FeeCalculatorInterface;
use PragmaGoTech\Interview\Model\Strategies\FeeCalculation\Term12FeeCalculationStrategy;
use PragmaGoTech\Interview\Model\Strategies\FeeCalculation\Term24FeeCalculationStrategy;

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
        };

        return $feeCalculationStrategy->calculateFee($application->getAmount());
    }
}