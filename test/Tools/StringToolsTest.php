<?php

namespace Tools;

use Learning\EqualAndIdentical\Fixtures\Tools;
use PHPUnit\Framework\TestCase;

class StringToolsTest extends TestCase
{
    final public function testSpaceSeparatedClassNames(): void
    {
        $expected = "String Tools Test";
        $currentClassName = basename(self::class);
        $actual = StringTools::spaceSeparatedClassNames($currentClassName);

        $this->assertEquals($expected, $actual);
    }
}
