<?php

include_once __DIR__ . '/OutputInterface.php';

class OutputWithEmote implements OutputInterface
{
    function output($something, $i = 0)
    {
        echo "👾: " . $something . "<br />";
    }
}