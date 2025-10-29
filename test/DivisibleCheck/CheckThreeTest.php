<?php

namespace DivisibleCheck;

use PHPUnit\Framework\TestCase;
use TypeError;


class CheckThreeTest extends TestCase
{
    private $dut;

    protected function setUp(): void
    {
        $this->dut = new CheckThree();
    }

    protected function tearDown(): void
    {
        // clean up
    }

    final public function testOnFloatCastToInt(): void
    {
        $this->assertIsBool($this->dut->check(3.5));
        $this->assertTrue($this->dut->check(3.5));
    }

    final public function testOnStringCastToInt(): void
    {
        $this->assertTrue($this->dut->check("0003"));
    }

    final public function testIsBool(): void
    {
        // oneliner version better!?
        $this->assertIsBool($this->dut->check(9));
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
    final public function testGetString(): void
    {
        $result = $this->dut->getString();

        $this->assertEquals("Fizz", $result);
    }
}
