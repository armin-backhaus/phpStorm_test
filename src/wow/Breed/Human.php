<?php

namespace wow\Breed;

use wow\Weapon\WeaponInterface;

class Human extends AbstractBreed
{
    public function __construct(string $name, int $health, int $mana,WeaponInterface $weapon)
    {
        parent:: __construct($name, $health, $mana,$weapon);

        $this->health = MAX_HEALTH_HUMAN;
        $this->courage = COURAGE_HUMAN;
        $this->strength = STRENGTH_HUMAN;
        $this->intelligence = INTELLIGENCE_HUMAN;
        $this->mana = MAX_MANA_HUMAN;
    }
}
