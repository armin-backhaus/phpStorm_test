<?php

namespace Output;

class OutputWithColor implements OutputInterface
{
    //for follow up!
//    function __construct($test)
//    {
//        echo "hallo constructor $test";
//    }
    function output($something, $i = 0): void
    {
        echo "<span style='color:rebeccapurple;'>" . $something . "</span><br />";
    }
}