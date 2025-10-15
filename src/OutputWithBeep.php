<?php

include_once __DIR__ . '/OutputInterface.php';

class OutputWithBeep implements OutputInterface
{
    function output($something, $i = 0)
    {
        exec('echo -en "\a"');
    }
}