<?php

namespace wow\Weapon;

use wow\Breed\BreedInterface;

interface WeaponInterface
{
    public function getPower(): int;
    public function useOn(BreedInterface $character): void;
}
