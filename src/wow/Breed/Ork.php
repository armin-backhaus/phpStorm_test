<?php

namespace wow\Breed;

use wow\Weapon\WeaponInterface;

class Ork extends AbstractBreed
{
    public function __construct(string $name, int $health, int $mana,WeaponInterface $weapon)
    {
        parent::__construct($name, $health, $mana,$weapon);

        $this->health = MAX_HEALTH_ORK;
        $this->courage = COURAGE_ORK;
        $this->strength = STRENGTH_ORK;
        $this->intelligence = INTELLIGENCE_ORK;
        $this->mana = MAX_MANA_ORK;
    }
}
