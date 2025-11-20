<?php

namespace wow\Breed;

use wow\Weapon\WeaponInterface;

class DungeonMaster extends AbstractBreed
{
    public function __construct(string $name, int $health, WeaponInterface $weapon)
    {
        parent::__construct($name, $health, $weapon);

        $this->health = MAX_HEALTH_DUNGEON_MASTER;
        $this->courage = COURAGE_DUNGEON_MASTER;
        $this->strength = STRENGTH_DUNGEON_MASTER;
        $this->intelligence = INTELLIGENCE_DUNGEON_MASTER;
    }
}
