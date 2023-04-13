<?php

namespace PragmaGoTech\Interview\Tests;

use PHPUnit\Framework\TestCase;
use PragmaGoTech\Interview\Model\LoanProposal;

class LoanProposalTest extends TestCase
{
    public function testGetAmountMethodReturnsAmountCorrectly()
    {
        $loanProposal = new LoanProposal(12, 10000);

        $this->assertEquals(10000.0, $loanProposal->getAmount());
    }
}
