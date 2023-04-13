<?php

declare(strict_types=1);

namespace PragmaGoTech\Interview\Model;

use http\Exception\InvalidArgumentException;

class FeeCalculator implements \PragmaGoTech\Interview\FeeCalculatorInterface
{

    /**
     * @inheritDoc
     */
    public function calculate(LoanProposal $application): float
    {
        switch ($application->getTerm()) {
            case 12:
                // Term 12 calculating strategy
                break;
            case 24:
                // Term 24 calculating strategy
                break;
            default:
                throw new InvalidArgumentException("Wrong term");
        }

        return 1.00;
    }
}