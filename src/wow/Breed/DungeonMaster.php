<?php

namespace wow\Breed;

class DungeonMaster extends AbstractBreed
{


    public function sayHi(): string
    {
        return "Yeah, my name is $this->name! ";
    }

    public function sayMyBreed(): string
    {
        $breed = preg_replace('/(?<!^)([A-Z])/', ' $1', basename(self::class));
        return "I'm an $breed! ";
    }
}
