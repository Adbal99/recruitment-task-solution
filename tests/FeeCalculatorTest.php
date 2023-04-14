<?php

namespace PragmaGoTech\Interview\Tests;

use PragmaGoTech\Interview\Model\FeeCalculator;
use PHPUnit\Framework\TestCase;
use PragmaGoTech\Interview\Model\LoanProposal;

class FeeCalculatorTest extends TestCase
{
    private FeeCalculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new FeeCalculator();
    }

    public function testCalculateWithTerm12()
    {
        // test case 1. different breakpoint value
        $loanProposal = new LoanProposal(12, 19250.0);

        $result = $this->calculator->calculate($loanProposal);

        $this->assertEquals(385, $result);

        // test case 2. equal breakpoint value
        $loanProposal
            ->setTerm(12)
            ->setAmount(10000);

        $result = $this->calculator->calculate($loanProposal);

        $this->assertEquals(200, $result);
    }

    public function testCalculateWithTerm24()
    {
        // test case 1. different breakpoint value
        $loanProposal = new LoanProposal(24, 11500.0);

        $result = $this->calculator->calculate($loanProposal);
        $this->assertEquals(460, $result);

        // test case 2. equal breakpoint value
        $loanProposal
            ->setTerm(24)
            ->setAmount(10000);

        $result = $this->calculator->calculate($loanProposal);
        $this->assertEquals(400, $result);

    }
}
