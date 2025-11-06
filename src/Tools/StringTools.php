<?php

namespace Tools;

class StringTools
{
    final public function spaceSeparatedClassNames(string $className): string
    {
        return preg_replace('/(?<!^)([A-Z])/', ' $1', $className);
    }
}
