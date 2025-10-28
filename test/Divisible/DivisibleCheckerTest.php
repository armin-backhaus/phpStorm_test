<?php

namespace Divisible;

use PHPUnit\Framework\TestCase;

class DivisibleCheckerTest extends TestCase
{
    final public function testThree(): void
    {
        $dut = new DivisibleBy();

        $this->assertTrue($dut->three(3));

        $this->assertFalse($dut->three(2));
    }

    final public function testFive(): void
    {
        $dut = new DivisibleBy();

        $this->assertTrue($dut->five(5));

        $this->assertFalse($dut->five(4));
    }

    final public function testSeven(): void
    {
        $dut = new DivisibleBy();

        $this->assertTrue($dut->seven(7));

        $this->assertFalse($dut->seven(6));
    }
}
