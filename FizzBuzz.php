<?php
// Zipp on 7

// loop from 1-100 php mit "echo"!
for ($i = 1; $i <= 100; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0) {
        output("FizzBuzz");
    } elseif ($i % 5 == 0) {
        output("Buzz");
    } elseif ($i % 3 == 0) {
        output("Fizz");
    } else {
        output($i);
    }

}

function output($test)
{
    echo $test . "<br><br>";
}

// todo ascii tabelle
// output current number
// number as Fizz on 3

// var_dump(5 / 3);
// buzz on 5
