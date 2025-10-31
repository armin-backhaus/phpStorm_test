<?php

namespace wow;

class Elf
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): string
    {
        return "Hello, my name is $this->name! ";
    }

    public function sayMyBreed(): string
    {
        return "I'm an " .  basename(self::class) . "! ";
    }
}
