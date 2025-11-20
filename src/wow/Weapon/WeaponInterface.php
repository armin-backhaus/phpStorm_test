<?php

namespace wow\Weapon;

interface WeaponInterface
{
    public function getWeapon(int $power): int;
    public function useOn(string $member): string;
}
