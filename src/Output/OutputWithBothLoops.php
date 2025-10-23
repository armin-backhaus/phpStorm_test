<?php

namespace Output;

class OutputWithBothLoops implements OutputInterface
{
    function output($something, $i = 0)
    {
        echo $something . ' - ', $i . "<br />";
    }
}
