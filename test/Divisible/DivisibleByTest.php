<?php

namespace Divisible;

use PHPUnit\Framework\TestCase;

class DivisibleByTest extends TestCase
{
    final public function testThreeFiveSeven(): void
    {
        $dut = new DivisibleBy();

        // Happy Path
        $this->assertTrue($dut->threeAndFiveAndSeven(3 * 5 * 7));

        // Critical Path
        $this->assertFalse($dut->threeAndFiveAndSeven(1));
        $this->assertFalse($dut->threeAndFiveAndSeven(5 * 7));
        $this->assertFalse($dut->threeAndFiveAndSeven(3 * 5));
        $this->assertFalse($dut->threeAndFiveAndSeven(3 * 7));
    }

    final public function testFiveAndSeven(): void
    {
        $dut = new DivisibleBy();

        $this->assertTrue($dut->fiveAndSeven(5 * 7));

        $this->assertFalse($dut->fiveAndSeven(5));
        $this->assertFalse($dut->fiveAndSeven(7));
    }

    final public function testThreeAndFive(): void
    {
        $dut = new DivisibleBy();

        $this->assertTrue($dut->threeAndFive(3 * 5));

        $this->assertFalse($dut->threeAndFive(3));
        $this->assertFalse($dut->threeAndFive(5));
    }

    final  public function threeAndSeven(): void
    {
        $dut = new DivisibleBy();

        $this->assertTrue($dut->threeAndSeven(3 * 7));

        $this->assertFalse($dut->threeAndSeven(3));
        $this->assertFalse($dut->threeAndSeven(7));
    }

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
