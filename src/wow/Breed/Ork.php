<?php

namespace wow\Breed;

class Ork extends AbstractBreed
{

    public function sayHi(): string
    {
        return "Hi, my name is $this->name! ";
    }
}