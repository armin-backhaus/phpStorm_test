<?php

namespace Learning;

use Divisible\DivisibleBy;
use PHPUnit\Framework\TestCase;

class EqualAndIdenticalTest extends TestCase
{
    final public function testForPrimitiveTypes(): void
    {
        $a = 1;
        $b = 1;
        $c = "1";

        $this->assertTrue($a == $b);
        $this->assertTrue($a === $b);

        $this->assertTrue($a == $c);
        $this->assertFalse($a === $c);
        $this->assertTrue((string) $a === $c);
        $this->assertTrue($a === (int) $c);
    }
}
