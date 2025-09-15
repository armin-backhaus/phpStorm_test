<?php
// if bedingung zu FizzBuzzZippZapp erweitern ! dont repeat yourself!
// wie kann ich bei Zipp einen 9 anstelle der 11 fehlerfrei nutzen?
// word dokument "was gemacht" für Arbeitszeugniss!!!!!
// class Output2 selbe ausgabe mit linenumber like ide, output 1x <br>! altes(neues) output zu nr2 umbauen, 1 nicht löschen!

//include_once dirname((__DIR__)) . '/src/outputZipp.php';
include_once __DIR__ . '/Output.php';
include_once __DIR__ . '/DivisibleBy.php';

class FizzBuzz
{
    private $output;
    private $divisibleBy;
    private $upper;
    private $lower;

    function __construct($lower, $upper)
    {
        $this->output = new Output();
        $this->divisibleBy = new DivisibleBy();

        $this->upper = $upper;
        $this->lower = $lower;
    }

    function run()
    {
        //guard clause
        if ($this->upper <= $this->lower) {
            echo "nope";

            return;
        }

        for ($i = $this->lower; $i <= $this->upper; $i++) {

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


