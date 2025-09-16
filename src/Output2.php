<?php

class Output2
{
    function withLineNumber($withLineNumber)
    {
        echo "$withLineNumber: " . __LINE__;
    }
}