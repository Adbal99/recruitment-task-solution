<?php

namespace PragmaGoTech\Interview\Tests;

use PragmaGoTech\Interview\Model\FeeCalculator;
use PHPUnit\Framework\TestCase;
use PragmaGoTech\Interview\Model\LoanProposal;

class FeeCalculatorTest extends TestCase
{
    public function testCalculateWithTerm12()
    {
        $mockProposal = $this->createMock(LoanProposal::class);
        $mockProposal->method('getTerm')->willReturn(12);
        $mockProposal->method('getAmount')->willReturn(19250.0);

        $calculator = new FeeCalculator();
        $result = $calculator->calculate($mockProposal);

        $this->assertEquals(385, $result);
    }

    public function testCalculateWithTerm24()
    {
        $mockProposal = $this->createMock(LoanProposal::class);
        $mockProposal->method('getTerm')->willReturn(24);
        $mockProposal->method('getAmount')->willReturn(11500.0);

        $calculator = new FeeCalculator();
        $result = $calculator->calculate($mockProposal);

        $this->assertEquals(460, $result);
    }
}
