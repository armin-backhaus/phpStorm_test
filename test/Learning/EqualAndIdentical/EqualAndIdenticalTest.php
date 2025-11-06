<?php

namespace Learning\EqualAndIdentical;

use Learning\EqualAndIdentical\Fixtures\A;
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

    final public function testForArrays(): void
    {
        $array = [1, 2, 3];

        $this->assertTrue($array === [1, 2, 3]);
        $this->assertFalse($array === [3, 2, 1]);
        $this->assertFalse($array === [(float)1, (float)2, (float)3]);
        $this->assertTrue($array === [(integer)1, (integer)2, (integer)3]);
    }

    final public function testForClasses(): void
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
