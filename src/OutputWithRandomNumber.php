<?php

include_once __DIR__ . '/OutputInterface.php';

class OutputWithRandomNumber implements OutputInterface
{
    function output($something, $i = 0)
    {
        echo "rand(1, 10): " . $something . "<br />";
    }
}