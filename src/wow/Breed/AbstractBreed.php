<?php

namespace wow\Breed;

use Tools\StringTools;

class AbstractBreed implements BreedInterface
{
    protected string $name /* declaration of property */ ;
    protected int $health;

    public function __construct(string $name, int $health /* declaration of parameter */ )
    {
        # $this /* pointer to current object in use */
        # ->name /* pointer from object start in memory to property */
        #     = $name /* parameter with value inside */ ;

            $this->name = $name;
            $this->health = $health;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function sayGreeting(string $greeting): string
    {
        return "$greeting, my name is $this->name! My Health is $this->health! ";
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
}
