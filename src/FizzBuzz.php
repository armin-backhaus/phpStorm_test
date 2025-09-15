<?php
// if bedingung zu FizzBuzzZippZapp erweitern ! dont repeat yourself!
// wie kann ich bei Zipp einen 9 anstelle der 11 fehlerfrei nutzen?
// word dokument "was gemacht" für Arbeitszeugniss!!!!!
// class FizzBuzz -> methode run -> echo

//include_once dirname((__DIR__)) . '/src/outputZipp.php';
include_once __DIR__ . '/Output.php';
include_once __DIR__ . '/DivisibleBy.php';

class FizzBuzz
{
    private $output;
    private $divisibleBy;

    function __construct()
    {
        $this->output = new Output();
        $this->divisibleBy = new DivisibleBy();
    }

    function run()
    {
        for ($i = 1; $i <= 100; $i++) {

            if ($this->divisibleBy->threeAndFiveAndSeven($i)) {
                $this->output->withLinebreak("FizzBuzzZipp");
            } elseif ($this->divisibleBy->fiveAndSeven($i)) {
                $this->output->withLinebreak("BuzzZipp");
            } elseif ($this->divisibleBy->threeAndFive($i)) {
                $this->output->withLinebreak("FizzBuzz");
            } elseif ($this->divisibleBy->threeAndSeven($i)) {
                // echo("FizzZipp <br><br>");
                $this->output->withLinebreak("FizzZipp");
            } elseif ($this->divisibleBy->three($i)) {
                $this->output->withLinebreak("Fizz");
            } elseif ($this->divisibleBy->five($i)) {
                $this->output->withLinebreak("Buzz");
            } elseif ($this->divisibleBy->seven($i)) {
                $this->output->zipp();
            } else {
                $this->output->withLinebreak("$i");
            }
        }
    }
}


