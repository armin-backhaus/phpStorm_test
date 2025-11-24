<?php

namespace wow\Breed;

use wow\Weapon\WeaponInterface;

interface BreedInterface
{
    public function getName(): string;
    public function sayGreeting(string $greeting): string;
    public function sayMyBreed(): string;
    public function sayOuch(): void;
    public function getHealth(): int;
    public function getCourage(): int;
    public function getStrength(): int;
    public function getIntelligence(): int;
    public function getMana(): int;
    public function getWeapon(): WeaponInterface;

    public function setHealth(int $health): void;
    public function setMana(int $mana): void;
}
