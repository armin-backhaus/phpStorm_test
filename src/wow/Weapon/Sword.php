<?php

namespace wow\Weapon;

class Sword extends AbstractWeapon
{
    public function __construct($power)
    {
        parent::__construct($power);

            $this->power = WEAPON_POWER;
    }
}