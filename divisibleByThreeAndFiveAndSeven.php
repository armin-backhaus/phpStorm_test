<?php

function divisibleByThreeAndFiveAndSeven($i)
{
    return $i % 3 == 0 && $i % 5 == 0 && $i % 7 == 0;
}
