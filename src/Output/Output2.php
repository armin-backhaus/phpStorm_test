<?php

namespace Output;
class Output2
{
    public function withLineNumber($i, $something): void
    {
        echo "$i: " . $something . "<br />";
    }
}