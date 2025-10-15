<?php

include_once __DIR__ . '/OutputInterface.php';

class OutputWithBeep implements OutputInterface
{
    function output($something, $i = 0)
    {
        //TODO try make it work
        exec('echo -en "\a"');
    }
}