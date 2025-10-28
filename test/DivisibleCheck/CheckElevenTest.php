<?php

namespace DivisibleCheck;

use PHPUnit\Framework\TestCase;

class CheckElevenTest extends TestCase
{
    private $checkEleven;

    public function setUp(): void
    {
        $this->dut = new CheckEleven();
    }

    protected function tearDown(): void
    {
        //clean up
    }

    final public function testBool(): void
    {
        $result = $this->dut->check(11);

        $this->assertTrue($result);
    }

    final public function testIsDivisible(): void
    {
        $result = $this->dut->check(33);

        $this->assertTrue($result);
    }

    final public function testIsNotDivisible(): void
    {
        $result = $this->dut->check(10);

        $this->assertFalse($result);
    }
}
