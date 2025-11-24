<?php

namespace wow\Breed;

use wow\Weapon\WeaponInterface;

class Elf extends AbstractBreed
{
    public function __construct(string $name, int $health, int $mana, WeaponInterface $weapon)
    {
        parent::__construct($name, $health, $mana, $weapon);

        $this->health = MAX_HEALTH_ELF;
        $this->courage = COURAGE_ELF;
        $this->strength = STRENGTH_ELF;
        $this->intelligence = INTELLIGENCE_ELF;
        $this->mana = MAX_MANA_ELF;
    }
}
