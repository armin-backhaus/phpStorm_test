<?php

include_once __DIR__ . '/OutputInterface.php';

class OutputWithLinebreak implements OutputInterface
{
    function output($something, $i = 0)
    {
        echo "$something <br><br>";
    }
}
