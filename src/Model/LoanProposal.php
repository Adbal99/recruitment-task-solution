<?php

declare(strict_types=1);

namespace PragmaGoTech\Interview\Model;

use function PHPUnit\Framework\throwException;

/**
 * A cut down version of a loan application containing
 * only the required properties for this test.
 */
class LoanProposal
{
    private int $term;

    private float $amount;

    public function __construct(int $term, float $amount)
    {
        if (!in_array($term, [12, 24], true) || ($amount < 1000 || $amount > 20_000)) {
            throw new \InvalidArgumentException("Wrong term or amount value!");
        }

        $this->term = $term;
        $this->amount = $amount;
    }

    /**
     * Term (loan duration) for this loan application
     * in number of months.
     */
    public function getTerm(): int
    {
        return $this->term;
    }

    /**
     * Amount requested for this loan application.
     */
    public function getAmount(): float
    {
        return $this->amount;
    }
}
