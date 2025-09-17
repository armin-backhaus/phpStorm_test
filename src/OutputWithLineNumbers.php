<?php

include_once __DIR__ . '/OutputInterface.php';

class OutputWithLineNumbers implements OutputInterface
{
    function output($something, $i = 0)
    {
        echo "$i: " . $something . "<br />";
    }
}