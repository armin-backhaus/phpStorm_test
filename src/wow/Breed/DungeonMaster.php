<?php

namespace wow\Breed;

class DungeonMaster extends AbstractBreed
{


    public function sayGreeting($greeting): string
    {
        return "Yeah, my name is $this->name! ";
    }
}
