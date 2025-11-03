<?php

namespace wow;

use PHPUnit\Framework\TestCase;

class DarkIronDwarfTest extends TestCase
{
    final public function testDarkIronDwarf(): void
    {
        $expected = "Dark Iron Dwarf Test";
        $currentClassName = basename(self::class);
        $actual = $this->getClassNameWithSpaces($currentClassName);

        $this->assertEquals($expected, $actual);
    }

    public function getClassNameWithSpaces($className): string
    {
        return $className . " TODO for Armin";
    }
}
