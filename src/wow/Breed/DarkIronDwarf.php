<?php

namespace wow\Breed;

use wow\Weapon\WeaponInterface;

class DarkIronDwarf extends AbstractBreed
{
    public function __construct(string $name, int $health, int $mana, WeaponInterface $weapon)
    {
        parent:: __construct($name, $health, $mana, $weapon);

        $this->health = MAX_HEALTH_DARK_IRON_DWARF;
        $this->courage = COURAGE_DARK_IRON_DWARF;
        $this->strength = STRENGTH_DARK_IRON_DWARF;
        $this->intelligence = INTELLIGENCE_DARK_IRON_DWARF;
        $this->mana = MAX_MANA_DARK_IRON_DWARF;
    }
}
