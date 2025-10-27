<?php

namespace Output;

class OutputWithRandomNumber implements OutputInterface
{
    function output($something, $i = 0): void
    {
        echo "rand(1, 10): " . $something . "<br />";
    }
}