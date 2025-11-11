<?php

namespace wow\Breed;

class Elf extends AbstractBreed
{


    public function sayHello(): string
    {
        return "Hello, my name is $this->name! ";
    }

    public function sayMyBreed(): string
    {
        return "I'm an " .  basename(self::class) . "! ";
    }
}
