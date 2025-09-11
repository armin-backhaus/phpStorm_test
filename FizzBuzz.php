<?php
// if bedingung zu FizzBuzzZippZapp erweitern ! dont repeat yourself!
// wie kann ich bei Zipp einen 9 anstelle der 11 fehlerfrei nutzen?
// word dokument "was gemacht" für Arbeitszeugniss!!!!!
// function outputZipp.php erstellen! tag!!!!
//für alle eine funktion!

include_once 'outputZipp.php';
include_once 'outputWithLinebreak.php';
include_once 'divisibleBySeven.php';
include_once 'divisibleByFive.php';
include_once 'divisibleByThree.php';
include_once 'divisibleByThreeAndSeven.php';
include_once 'divisibleByThreeAndFive.php';
include_once 'divisibleByFiveAndSeven.php';
include_once 'divisibleByThreeAndFiveAndSeven.php';


for ($i = 1; $i <= 100; $i++) {

    if (divisibleByThreeAndFiveAndSeven($i)) {
        outputWithLinebreak("FizzBuzzZipp");
    } elseif (divisibleByFiveAndSeven($i)) {
        outputWithLinebreak("BuzzZipp");
    } elseif (divisibleByThreeAndFive($i)) {
        outputWithLinebreak("FizzBuzz");
    } elseif (divisibleByThreeAndSeven($i)) {
        // echo("FizzZipp <br><br>");
        outputWithLinebreak("FizzZipp");
    } elseif (divisibleByThree($i)) {
        outputWithLinebreak("Fizz");
    } elseif (divisibleByFive($i)) {
        outputWithLinebreak("Buzz");
    } elseif (divisibleBySeven($i)) {
        outputZipp();
    } else {
        outputWithLinebreak("$i");
    }
}
