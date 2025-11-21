<?php

namespace wow\Weapon;

class Mace extends AbstractWeapon
{
    public function __construct()
    {
        parent::__construct(WEAPON_POWER_MACE);
    }
}