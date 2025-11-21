<?php

namespace wow\Weapon;

class Sword extends AbstractWeapon
{
    public function __construct()
    {
        parent::__construct(WEAPON_POWER_SWORD);
    }
}