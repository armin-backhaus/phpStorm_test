<?php
// if bedingung zu FizzBuzzZippZapp erweitern ! dont repeat yourself!
// wie kann ich bei Zipp einen 9 anstelle der 11 fehlerfrei nutzen?
// word dokument "was gemacht" für Arbeitszeugniss!!!!!
// function outputZipp.php erstellen! tag!!!!

//function outputZipp()
//{
//    echo "Zipp <br><br>";
//}

include 'function1.php';

//function outputWithLinebreak($something)
//{
//    echo "$something <br><br>";
//}

include 'function2.php';

for ($i = 1; $i <= 100; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0 && $i % 7 == 0) {
        outputWithLinebreak("FizzBuzzZipp");
    } elseif ($i % 5 == 0 && $i % 7 == 0) {
        outputWithLinebreak("BuzzZipp");
    } elseif ($i % 3 == 0 && $i % 5 == 0) {
        outputWithLinebreak("FizzBuzz");
    } elseif ($i % 3 == 0 && $i % 7 == 0) {
        // echo("FizzZipp <br><br>");
        outputWithLinebreak("FizzZipp");
    } elseif ($i % 3 == 0) {
        outputWithLinebreak("Fizz");
    } elseif ($i % 5 == 0) {
        outputWithLinebreak("Buzz");
    } elseif ($i % 7 == 0) {
        outputZipp();
    } else {
        outputWithLinebreak("$i");
    }
}
