<?php

namespace wow\Breed;

use Tools\StringTools;

class AbstractBreed implements BreedInterface
{
    protected string $name /* declaration of property */ ;
    protected int $health;
    protected int $courage;

    public function __construct(string $name, int $health /* declaration of parameter */ )
    {
        # $this /* pointer to current object in use */
        # ->name /* pointer from object start in memory to property */
        #     = $name /* parameter with value inside */ ;

            $this->name = $name;
            $this->health = $health;
            $this->courage = 0;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function sayGreeting(string $greeting): string
    {
        return "$greeting, my name is $this->name! My Health is $this->health! And my Courage is $this->courage! ";
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
}
