<?php

namespace DivisibleCheck;

use PHPUnit\Framework\TestCase;
use function SebastianBergmann\Type\TestFixture\voidReturnType;


class CheckSeven extends TestCase
{
    private $dut;

    public function setUp(): void
    {
        $this->dut = new CheckSeven();
    }

    protected function tearDown(): void
    {
        //clean up
    }

    final public function testBool(): void
    {
        $result = $this->dut->check(21);

        $this->assertIsBool($result);
    }

    final public function testIsDivisible(): void
    {
        $result = $this->dut->check(7);

        $this->assertTrue($result);
    }

    final public function testIsNotDivisible(): void
    {
        $result = $this->dut->check(6);

        $this->assertFalse($result);
    }
}
