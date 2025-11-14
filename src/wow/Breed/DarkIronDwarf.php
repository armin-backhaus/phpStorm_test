<?php

namespace wow\Breed;

use Tools\StringTools;

class DarkIronDwarf extends AbstractBreed
{


    public function sayHi(): string
    {
        return "Grr, my name is $this->name! ";
    }
}
