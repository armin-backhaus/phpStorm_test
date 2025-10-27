<?php

namespace Output;

class OutputWithLineNumbers implements OutputInterface
{
    function output($something, $i = 0): void
    {
        echo "$i: " . $something . "<br />";
    }
}