<?php

namespace wow\Weapon;

use Random\RandomException;
use wow\Breed\BreedInterface;

class AbstractWeapon implements WeaponInterface
{
    protected int $power;

    /**
     * @throws RandomException
     */
    public function __construct(int $power)
    {
        $this->power = $this->randomize($power);
    }

    /**
     * @throws RandomException
     */
    private function randomize(int $value): int
    {
        $random = random_int(80, 120);
        $normalized = $random / 100;
        $result = $value * $normalized;

        return (int) $result;
    }

    public function getPower(): int
    {
        return $this->power;
    }

    public function useOn(BreedInterface $character): void
    {
        $health = $character->getHealth();
        $health -= $this->power;
        $character->setHealth($health);

        $character->sayOuch();
    }
}
