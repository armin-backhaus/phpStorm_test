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
        $A = new A();
        $B = new A();
        $C = new C();

        $this->assertTrue($a == $b);
        $this->assertTrue($a === $b);

        $this->assertTrue($a == $c);
        $this->assertFalse($a === $c);
        $this->assertTrue((string) $a === $c);
        $this->assertTrue($a === (int) $c);

        $this->assertTrue($A == $B);
        $this->assertFalse($A === $B);

        $this->assertFalse($A == $C);
        $this->assertFalse($A === $C);
    }
}

class A {};
class C {};