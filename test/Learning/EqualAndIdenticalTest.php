<?php

namespace Learning;

use Divisible\DivisibleBy;
use PHPUnit\Framework\TestCase;

class EqualAndIdenticalTest extends TestCase
{
    final public function testEqualAndIdentical(): void
    {
        $a = 1;
        $b = 2;

        $this->assertTrue($a == $b);
        $this->assertTrue($a === $b);

        $this->assertFalse($a == $b);
        $this->assertFalse($a === $b);
    }
}
