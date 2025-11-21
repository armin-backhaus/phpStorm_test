<?php

namespace wow\Weapon;

class Bow extends AbstractWeapon
{
    public function __construct()
    {
        parent::__construct(WEAPON_POWER_BOW);
    }
}