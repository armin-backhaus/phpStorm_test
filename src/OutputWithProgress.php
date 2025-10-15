<?php

include_once __DIR__ . '/OutputInterface.php';

class OutputWithProgress implements OutputInterface
{
    function output($something, $i = 0)
    {
        //TODO make number of steps available for calculation of real %
        $percent = $i * 10;
        $bar = str_repeat('█', $percent / 5) . str_repeat('░', 20 - $percent / 5);
        echo $i;
        echo "<pre>[$bar]$percent%</pre>";
        //flush();
    }
}