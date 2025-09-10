<?php
// if bedingung zu FizzBuzzZippZapp erweitern ! dont repeat yourself!
// wie kann ich bei Zipp einen 9 anstelle der 11 fehlerfrei nutzen?
// word dokument "was gemacht" für Arbeitszeugniss!
function myMessage()
{
    echo "Zipp <br><br>";
}

myMessage();

for ($i = 1; $i <= 100; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0 && $i % 7 == 0) {
        echo("FizzBuzzZipp<br><br>");
    } elseif ($i % 5 == 0 && $i % 7 == 0) {
        echo("BuzzZipp <br><br>");
    } elseif ($i % 3 == 0 && $i % 5 == 0) {
        echo("FizzBuzz <br><br>");
    } elseif ($i % 3 == 0 && $i % 7 == 0) {
        echo("FizzZipp <br><br>");
    } elseif ($i % 3 == 0) {
        echo("Fizz <br><br>");
    } elseif ($i % 5 == 0) {
        echo("Buzz <br><br>");
    } elseif ($i % 7 == 0) {
        // echo("Zipp <br><br>");
        myMessage();
    } else {
        echo("$i<br><br>");
    }
}
