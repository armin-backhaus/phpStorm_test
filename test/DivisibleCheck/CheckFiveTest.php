<?php

namespace DivisibleCheck;

use PHPUnit\Framework\TestCase;
use function SebastianBergmann\Type\TestFixture\voidReturnType;

class CheckFiveTest extends TestCase
{
    private $dut;

    public function setUp(): void
    {
        $this->dut = new CheckFive();
    }

    protected function tearDown(): void
    {
        //clean up
    }

    final public function testBool(): void
    {
        $result = $this->dut->check(15);
        voidReturnType();

        $this->assertTrue($result);
    }

    final public function testIsDivisible(): void
    {
        $result = $this->dut->check(5);

        $this->assertFalse($result);
    }

    final public function testIsNotDivisible(): void
    {
        $result = $this->dut->check(4);

        $this->assertFalse($result);
    }
}
