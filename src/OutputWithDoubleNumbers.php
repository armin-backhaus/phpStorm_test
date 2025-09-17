<?php

include_once __DIR__ . '/OutputInterface.php';

class OutputWithDoubleNumbers implements OutputInterface
{
    function output($something, $i = 0)
    {
        echo "$i-$i: " . $something . "<br />";
    }
}