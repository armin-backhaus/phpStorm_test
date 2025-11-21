<?php

namespace wow\Weapon;

class Bone extends AbstractWeapon
{
    public function __construct()
    {
        parent::__construct(WEAPON_POWER_BONE);
    }
}