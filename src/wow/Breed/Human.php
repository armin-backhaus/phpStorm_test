<?php

namespace wow\Breed;

class Human extends AbstractBreed
{


    public function sayHi(): string
    {
        return "Yo, my name is $this->name! ";
    }
}
