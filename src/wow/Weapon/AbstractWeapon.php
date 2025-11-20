<?php

namespace wow\Weapon;

use wow\Breed\BreedInterface;

class AbstractWeapon implements WeaponInterface
{
    protected int $power;

    public function __construct(int $power)
    {
        $this->power = $power;
    }

    public function getPower(): int
    {
        return $this->power;
    }

    public function useOn(BreedInterface $character): void
    {
        $health = $character->getHealth();
        $health -= 5;
        $character->setHealth($health);
    }
}
