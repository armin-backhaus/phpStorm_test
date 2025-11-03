<?php

namespace wow\Breed;

class Ork
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHi(): string
    {
        return "Hi, my name is $this->name! ";
    }

    public function sayMyBreed(): string
    {
        return "I'm an " . basename(self::class) . "! ";
    }
}