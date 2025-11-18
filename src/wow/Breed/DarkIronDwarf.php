<?php

namespace wow\Breed;

use Tools\StringTools;

class DarkIronDwarf extends AbstractBreed
{
    public function __construct($name, $health)
    {
        parent:: __construct($name, $health);

        $this->health = MAX_HEALTH_DARK_IRON_DWARF;
    }
}
