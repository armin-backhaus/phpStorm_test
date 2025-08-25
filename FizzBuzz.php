<?php
// if bedingung zu FizzBuzzZippZapp erweitern ! dont repeat yourself!
// wie kann ich bei Zipp einen 9 anstelle der 11 fehlerfrei nutzen?

for ($i = 1; $i <= 2000; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0 && $i % 7 == 0 && $i % 11 == 0) {
        echo("FizzBuzzZippZapp<br><br>");
    } elseif ($i % 3 == 0) {
        echo("Fizz <br><br>");
    } elseif ($i % 5 == 0) {
        echo("Buzz <br><br>");
    } elseif ($i % 7 == 0) {
        echo("Zipp <br><br>");
    } elseif ($i % 11 == 0) {
        echo("Zapp <br><br>");
    } else {
        echo("$i<br><br>");
    }
}
