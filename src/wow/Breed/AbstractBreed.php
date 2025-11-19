<?php

namespace wow\Breed;

use Tools\StringTools;

class AbstractBreed implements BreedInterface
{
    protected string $name /* declaration of property */
    ;
    protected int $health;
    protected int $courage;
    protected int $strength;
    protected int $intelligence;
    protected string $weapon;

    public function __construct(string $name, int $health /* declaration of parameter */)
    {
        # $this /* pointer to current object in use */
        # ->name /* pointer from object start in memory to property */
        #     = $name /* parameter with value inside */ ;

        $this->name = $name;
        $this->health = $health;
        $this->courage = 0;
        $this->strength = 0;
        $this->intelligence = 0;
        $this->weapon = "";
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function sayGreeting(string $greeting): string
    {
        return (
            "$greeting, my name is $this->name! My Health is $this->health! And my Courage is $this->courage!"  .
            " My Strength is $this->strength! My Intelligence is $this->intelligence! My Weapon is an $this->weapon "
        );
    }

    public function sayMyBreed(): string
    {
        $breed = StringTools::spaceSeparatedClassNames(basename(get_class($this)));

        return "I'm an $breed! ";
    }

    public function getHealth(): int
    {
        return $this->health;
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

    public function getWeapon(): string
    {
        return $this->weapon;
    }
}
