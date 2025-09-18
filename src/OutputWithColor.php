<?php

include_once __DIR__ . '/OutputInterface.php';

class OutputWithColor implements OutputInterface
{
    //zum verfolgen!
//    function __construct($test)
//    {
//        echo "hallo constructor $test";
//    }
    function output($something, $i = 0)
    {
        echo "<span style='color:rebeccapurple;'>" . $something . "</span><br />";
    }
}