<?php

namespace wow\Breed;

use Tools\StringTools;

class DarkIronDwarf extends AbstractBreed
{


    public function sayGrr(): string
    {
        return "Grr, my name is $this->name! ";
    }

    public function sayHi(): string
    {
        //$stringTools = new StringTools();
        //$breed = $stringTools->spaceSeparatedClassNames(basename(self::class));
        $breed = StringTools::spaceSeparatedClassNames(basename(self::class));

        return "I'm an $breed! ";
    }
}
