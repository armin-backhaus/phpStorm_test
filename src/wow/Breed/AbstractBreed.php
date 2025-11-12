<?php

namespace wow\Breed;

use Tools\StringTools;

class AbstractBreed implements BreedInterface
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function sayHi(): string
    {
        return "Hi, my name is $this->name! ";
    }

    public function sayMyBreed(): string
    {
        $breed = StringTools::spaceSeparatedClassNames(basename(self::class));

        return "I'm an $breed! ";
    }
}