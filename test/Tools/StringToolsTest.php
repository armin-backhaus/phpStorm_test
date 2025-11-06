<?php

namespace Tools;

use Learning\EqualAndIdentical\Fixtures\Tools;
use PHPUnit\Framework\TestCase;

class StringToolsTest extends TestCase
{
    final public function testSpaceSeparatedClassNames(): void
    {
        $stringTools = new StringTools();

        $expected = "String Tools Test";
        $currentClassName = basename(self::class);
        $actual = $stringTools->spaceSeparatedClassNames($currentClassName);

        $this->assertEquals($expected, $actual);
    }
}
