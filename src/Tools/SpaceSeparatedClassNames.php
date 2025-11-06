<?php

namespace src\Tools;

class SpaceSeparatedClassNames
{
    final public function SpaceSeparatedClassNames()
    {
        $breed = preg_replace('/(?<!^)([A-Z])/', ' $1', basename(self::class));
        return $breed;
    }
}
