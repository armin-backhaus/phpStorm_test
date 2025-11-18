<?php

namespace wow\Breed;

class DungeonMaster extends AbstractBreed
{
    public function __construct(string $name, int $health)
    {
        parent::__construct($name, $health);

        $this->health = MAX_HEALTH_DUNGEON_MASTER;
        $this->courage = COURAGE_DUNGEON_MASTER;
    }
}
