<?php

namespace wow\Group;

use PHPUnit\Framework\TestCase;
use wow\Breed\DungeonMaster;
use wow\Breed\Elf;

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
}
