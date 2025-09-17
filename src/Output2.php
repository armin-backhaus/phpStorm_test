<?php

class Output2
{
    public static function withLineNumber($withLineNumber)
    {
        return "$withLineNumber: " . __LINE__;
    }
}