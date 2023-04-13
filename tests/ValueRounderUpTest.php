<?php

namespace PragmaGoTech\Interview\Tests;

use PragmaGoTech\Interview\Service\ValueRounderUp;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

class ValueRounderUpTest extends TestCase
{
    public function testRoundToFiveMultiplesMethod()
    {
        $amount = 1001;
        $this->assertEquals(1005, ValueRounderUp::roundToFiveMultiples($amount));

        $amount = 1000.25;
        $this->assertEquals(1005, ValueRounderUp::roundToFiveMultiples($amount));

        $amount = 1005;
        $this->assertEquals(1005, ValueRounderUp::roundToFiveMultiples($amount));

        $amount = 1007;
        $this->assertEquals(1010, ValueRounderUp::roundToFiveMultiples($amount));
    }
}
