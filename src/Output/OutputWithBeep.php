<?php

namespace Output;

class OutputWithBeep implements OutputInterface
{
    function output($something, $i = 0)
    {
        //TODO try make it work
        //exec('echo -en "\a"');
    }
}