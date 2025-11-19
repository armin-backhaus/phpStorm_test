<?php

namespace wow\Weapon;

interface WeaponInterface
{
    public function getWeapon(object $weapon): object;
    public function useOn(string $member): string;
}
