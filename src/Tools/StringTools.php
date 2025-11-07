<?php

namespace Tools;

abstract class StringTools
{
    public static function spaceSeparatedClassNames(string $className): string
    {
        return preg_replace('/(?<!^)([A-Z])/', ' $1', $className);
    }
}
