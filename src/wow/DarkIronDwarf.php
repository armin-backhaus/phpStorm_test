<?php

namespace wow;

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
        return "I'm an " . basename(self::class) . "! ";
    }

    // DarkIronDwarf into Dark Iron Dwarf

}
