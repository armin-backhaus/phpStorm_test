<?php

namespace wow\Breed;

class Forsaken extends AbstractBreed
{


    public function sayHi(): string
    {
        return "Ssh, my name is $this->name! ";
    }
}
