<?php

namespace wow\Breed;

use Tools\StringTools;

class DarkIronDwarf
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayGrr(): string
    {
        return "Grr, my name is $this->name! ";
    }

    public function sayMyBreed(): string
    {
        //$stringTools = new StringTools();
        //$breed = $stringTools->spaceSeparatedClassNames(basename(self::class));
        $breed = StringTools::spaceSeparatedClassNames(basename(self::class));

        return "I'm an $breed! ";
    }
}
