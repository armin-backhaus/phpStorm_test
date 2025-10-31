<?php

namespace wow;

class Human
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayYo(): string
    {
        return "Yo, my name is $this->name! ";
    }

    public function sayMyBreed(): string
    {
        return "I'm an " . basename(self::class) . "! ";
    }
}
