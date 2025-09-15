<?php
// if bedingung zu FizzBuzzZippZapp erweitern ! dont repeat yourself!
// wie kann ich bei Zipp einen 9 anstelle der 11 fehlerfrei nutzen?
// word dokument "was gemacht" für Arbeitszeugniss!!!!!
// class FizzBuzz -> methode run -> echo

//include_once dirname((__DIR__)) . '/src/outputZipp.php';
include_once __DIR__ . '/Output.php';
include_once __DIR__ . '/DivisibleBy.php';

$output = new Output();
$divisibleBy = new DivisibleBy();

for ($i = 1; $i <= 100; $i++) {

    if ($divisibleBy->threeAndFiveAndSeven($i)) {
        $output->withLinebreak("FizzBuzzZipp");
    } elseif ($divisibleBy->fiveAndSeven($i)) {
        $output->withLinebreak("BuzzZipp");
    } elseif ($divisibleBy->threeAndFive($i)) {
        $output->withLinebreak("FizzBuzz");
    } elseif ($divisibleBy->threeAndSeven($i)) {
        // echo("FizzZipp <br><br>");
        $output->withLinebreak("FizzZipp");
    } elseif ($divisibleBy->three($i)) {
        $output->withLinebreak("Fizz");
    } elseif ($divisibleBy->five($i)) {
        $output->withLinebreak("Buzz");
    } elseif ($divisibleBy->seven($i)) {
        $output->zipp();
    } else {
        $output->withLinebreak("$i");
    }
}
