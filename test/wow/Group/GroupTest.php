<?php

namespace wow\Group;

use PHPUnit\Framework\TestCase;
use wow\Breed\DungeonMaster;
use wow\Breed\Elf;
use wow\Breed\Human;

class GroupTest extends TestCase
{
    final public function testGroup()
    {
        $group = new Group();
        $dub = new DungeonMaster("Dub");
        $altair = new Elf("Altair");

        $group->addMember($dub, $altair);

        $members = $group->getMembers();

        $this->assertIsArray($members);
        $this->assertContains($dub, $members);
        $this->assertContains($altair, $members);

        $dubMember = $group->getMember("Dub");

        $this->assertSame($dub, $dubMember);
    }

    final public function testGroup2()
    {
        $group = new Group();
        $dub = new DungeonMaster("Dub");
        $altair = new Elf("Altair");
        $hannes = new Human("Hannes");
        $armin = new Human("Armin");

        $group->addMember($dub, $altair, $hannes, $armin);

        $result = $group->findObjectByName("Armin");

        $this->assertSame($armin, $result);
    }

    final public function testAddNonBreedThrowsTypeError()
    {
        $group = new Group();

        $this->expectException(\TypeError::class);

        $group->addMember("Ich bin kein Breed");
    }
}
