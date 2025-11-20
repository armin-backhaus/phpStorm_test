<?php

namespace wow\Weapon;

class AbstractWeapon implements WeaponInterface
{
    protected int $power;

    public function __construct(int $power, WeaponInterface $sword)
    {
        $this->power = $power;
    }

    public function getWeapon(int $power): int
    {
        return $this->power;
    }

    public function useOn($member): string
    {
        return $member;
    }
}
