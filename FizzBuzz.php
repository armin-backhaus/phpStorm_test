<?php

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo("Fizz") . "<br><br>";
    } elseif ($i % 5 == 0) {
        echo("Buzz") . "<br><br>";
    } else {
        echo("$i<br><br>");
    }
}

// erweitern das FizzBuzz bei 3 und 5 ohne rest ausgegeben wird