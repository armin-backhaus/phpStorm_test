<?php

namespace DivisibleCheck;

use PHPUnit\Framework\TestCase;

class CheckThreeTest extends TestCase
{
    private $dut;

    public function setUp(): void
    {
        $this->dut = new CheckThree();
    }
    protected function tearDown(): void
    {
        //clean up
    }

    final public function testIsBool(): void
    {
        $result = $this->dut->check(9);

        $this->assertIsBool($result);
    }

    final public function testIsDivisible(): void
    {
        $result = $this->dut->check(3);

        $this->assertTrue($result);
    }

    final public function testIsNotDivisible(): void
    {
        $result = $this->dut->check(4);

        $this->assertFalse($result);
    }
}
