<?php

namespace wow\Breed;

class DarkIronDwarf
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayGrr(): string
    {
        return "Grr, my name is $this->name! ";
    }

    public function sayMyBreed(): string
    {
        $breed = preg_replace('/(?<!^)([A-Z])/', ' $1', basename(self::class));
        return "I'm an $breed! ";
    }
}
