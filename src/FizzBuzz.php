<?php
// if bedingung zu FizzBuzzZippZapp erweitern ! dont repeat yourself!
// wie kann ich bei Zipp einen 9 anstelle der 11 fehlerfrei nutzen?
// word dokument "was gemacht" für Arbeitszeugniss!!!!!
// function outputZipp.php erstellen! tag!!!!
//alle divisibleBy in eine class!

//include_once dirname((__DIR__)) . '/src/outputZipp.php';
include_once __DIR__ . '/outputWithLinebreak.php';
include_once __DIR__ . '/divisibleBySeven.php';
include_once __DIR__ . '/divisibleByFive.php';
include_once __DIR__ . '/divisibleByThree.php';
include_once __DIR__ . '/divisibleByThreeAndSeven.php';
include_once __DIR__ . '/divisibleByThreeAndFive.php';
include_once __DIR__ . '/divisibleByFiveAndSeven.php';
include_once __DIR__ . '/divisibleByThreeAndFiveAndSeven.php';
include_once __DIR__ . '/Output.php';

$output = new Output();

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
        $output->zipp();
    } else {
        outputWithLinebreak("$i");
    }
}
