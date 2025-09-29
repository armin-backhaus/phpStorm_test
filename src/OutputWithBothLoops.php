<?php

include_once __DIR__ . '/OutputInterface.php';

class OutputWithBothLoops implements OutputInterface
{
    function output($something, $i = 0)
    {
        echo $something . ' - ', $i . "<br />";
    }
}
