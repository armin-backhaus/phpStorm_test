<?php

namespace Output;

class OutputWithEmote implements OutputInterface
{
    function output($something, $i = 0): void
    {
        echo "👾: " . $something . "<br />";
    }
}