<?php

namespace wow\Breed;

use wow\Weapon\WeaponInterface;

class Human extends AbstractBreed
{
    public function __construct(string $name, int $health, WeaponInterface $weapon)
    {
        parent:: __construct($name, $health, $weapon);

        $this->health = MAX_HEALTH_HUMAN;
        $this->courage = COURAGE_HUMAN;
        $this->strength = STRENGTH_HUMAN;
        $this->intelligence = INTELLIGENCE_HUMAN;
    }
}
