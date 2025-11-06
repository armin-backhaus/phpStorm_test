<?php

namespace learning\test;

use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    final public function testForArrays(): void
    {
        $array = [1, 2, 3];

        $this->assertTrue($array === [1, 2, 3]);
        $this->assertFalse($array === [3, 2, 1]);
        $this->assertFalse($array === [(float)1, (float)2, (float)3]);
        $this->assertTrue($array === [(integer)1, (integer)2, (integer)3]);
    }
}
