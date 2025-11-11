<?php

namespace wow\Breed;

class Human extends AbstractBreed
{


    public function sayYo(): string
    {
        return "Yo, my name is $this->name! ";
    }

    public function sayMyBreed(): string
    {
        return "I'm an " . basename(self::class) . "! ";
    }
}
