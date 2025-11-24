<?php

namespace wow\Breed;

use wow\Weapon\WeaponInterface;

class Forsaken extends AbstractBreed
{
    public function __construct(string $name, int $health, int $mana,WeaponInterface $weapon)
    {
        parent::__construct($name, $health, $mana,$weapon);

        $this->health = MAX_HEALTH_FORSAKEN;
        $this->courage = COURAGE_FORSAKEN;
        $this->strength = STRENGTH_FORSAKEN;
        $this->intelligence = INTELLIGENCE_FORSAKEN;
        $this->mana = MAX_MANA_FORSAKEN;
    }
}
