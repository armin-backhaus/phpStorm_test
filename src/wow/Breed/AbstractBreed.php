<?php

namespace wow\Breed;

use Tools\StringTools;
use wow\Weapon\WeaponInterface;

class AbstractBreed implements BreedInterface
{
    protected string $name /* declaration of property */
    ;
    protected int $health;
    protected int $courage;
    protected int $strength;
    protected int $intelligence;
    protected int $mana;

    protected WeaponInterface $weapon;

    public function __construct(string $name, int $health, int $mana, WeaponInterface $weapon)
    {
        # $this /* pointer to current object in use */
        # ->name /* pointer from object start in memory to property */
        #     = $name /* parameter with value inside */ ;

        $this->name = $name;
        $this->health = $health;
        $this->courage = 0;
        $this->strength = 0;
        $this->intelligence = 0;
        $this->weapon = $weapon;
        $this->mana = $mana;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function sayGreeting(string $greeting): string
    {
        return (
            "$greeting, my name is $this->name! My Health is $this->health! My Mana is $this->mana! And my Courage is $this->courage!" .
            " My Strength is $this->strength! My Intelligence is $this->intelligence! My Weapon is an " . basename($this->weapon::class) . "! "
        );
    }

    public function sayMyBreed(): string
    {
        $breed = StringTools::spaceSeparatedClassNames(basename(get_class($this)));

        return "I'm an $breed! ";
    }

    public function sayOuch(): void
    {
        if ($this->health <= 0) {
            echo "I'm Dead ☠ !<br />";
        } else {
            echo "Ouch, now my Health is $this->health!<br />";
        }
    }

    public function setHealth(int $health): void
    {
        $this->health = $health;
    }
    public function setMana(int $mana): void
    {
        $this->mana = $mana;
    }

    public function getHealth(): int
    {
        return $this->health;
    }
    public function getMana(): int
    {
        return $this->mana;
    }

    public function getCourage(): int
    {
        return $this->courage;
    }

    public function getStrength(): int
    {
        return $this->strength;
    }

    public function getIntelligence(): int
    {
        return $this->intelligence;
    }

    public function getWeapon(): WeaponInterface
    {
        return $this->weapon;
    }
}
