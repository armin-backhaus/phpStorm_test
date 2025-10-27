<?php

namespace Output;


class OutputWithDoubleNumbers implements OutputInterface
{
    function output($something, $i = 0): void
    {
        echo "$i-$i: " . $something . "<br />";
    }
}