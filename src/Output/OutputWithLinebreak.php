<?php

namespace Output;

class OutputWithLinebreak implements OutputInterface
{
    function output($something, $i = 0): void
    {
        echo "$something <br><br>";
    }
}
