<?php

namespace Learning;

use Divisible\DivisibleBy;
use PHPUnit\Framework\TestCase;

class ClassTest extends TestCase
{
    final public function testForPrimitiveTypes(): void
    {
        $a = new A();
        $b = new A();
        $c = new C();

        $this->assertTrue($a == $b);
        $this->assertFalse($a === $b);

        $this->assertFalse($a == $c);
        $this->assertFalse($a === $c);
    }
}

class A {};

class C {};
