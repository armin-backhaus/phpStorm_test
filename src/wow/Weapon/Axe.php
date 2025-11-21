<?php

namespace wow\Weapon;

class Axe extends AbstractWeapon
{
    public function __construct()
    {
        parent::__construct(WEAPON_POWER_AXE);
    }
}