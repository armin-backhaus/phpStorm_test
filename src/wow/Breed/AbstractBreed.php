<?php

namespace wow\Breed;

use Tools\StringTools;

class AbstractBreed implements BreedInterface
{
    protected string $name /* declaration of property */ ;

    public function __construct(string $name /* declaration of parameter */ )
    {
        # $this /* pointer to current object in use */
        # ->name /* pointer from object start in memory to property */
        #     = $name /* parameter with value inside */ ;

            $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function sayGreeting(string $greeting): string
    {
        return "$greeting, my name is $this->name! ";
    }

    public function sayMyBreed(): string
    {
        $breed = StringTools::spaceSeparatedClassNames(basename(get_class($this)));

        return "I'm an $breed! ";
    }
}