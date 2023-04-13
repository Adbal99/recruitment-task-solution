<?php

declare(strict_types=1);

namespace PragmaGoTech\Interview\Model;

use PragmaGoTech\Interview\Interface\FeeCalculationStrategyInterface;
use PragmaGoTech\Interview\Interface\FeeCalculatorInterface;

class FeeCalculator implements FeeCalculatorInterface
{

    /**
     * @inheritDoc
     */
    public function calculate(LoanProposal $application): float
    {
        $feeCalculationStrategy = null;
        switch ($application->getTerm()) {
            case 12:
                // Term 12 calculating strategy
                break;
            case 24:
                // Term 24 calculating strategy
                break;
            default:
                throw new \InvalidArgumentException("Wrong term");
        }

        return 1.00;
    }
}