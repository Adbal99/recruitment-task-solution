<?php

namespace PragmaGoTech\Interview\Tests;

use PHPUnit\Framework\TestCase;
use PragmaGoTech\Interview\Model\LoanProposal;

class LoanProposalTest extends TestCase
{
    public function testConstructorWithValidParameters()
    {
        $loan = new LoanProposal(12, 1000.0);

        $this->assertInstanceOf(LoanProposal::class, $loan);
        $term = $loan->getTerm();
        $this->assertEquals(12, $term);
        $this->assertEquals(1000.0, $loan->getAmount());
    }

    public function testConstructorWithInvalidTerm()
    {
        $this->expectException(\InvalidArgumentException::class);

        $loan = new LoanProposal(6, 1000.0);
    }

    public function testConstructorWithInvalidAmount()
    {
        $this->expectException(\InvalidArgumentException::class);

        $loan = new LoanProposal(12, 500.0);
    }
}
