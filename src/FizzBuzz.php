<?php
// if bedingung zu FizzBuzzZippZapp erweitern ! dont repeat yourself!
// wie kann ich bei Zipp einen 9 anstelle der 11 fehlerfrei nutzen?
// word dokument "was gemacht" für Arbeitszeugniss!!!!!
// class Output2 selbe ausgabe mit linenumber like ide, output 1x <br>! altes(neues) output zu nr2 umbauen, 1 nicht löschen!

//include_once dirname((__DIR__)) . '/src/outputZipp.php';
include_once __DIR__ . '/Output.php';
include_once __DIR__ . '/DivisibleBy.php';
include_once __DIR__ . '/Output2.php';

class FizzBuzz
{
    private $output;
    private $divisibleBy;
    private $upper;
    private $lower;
    private $withLineNumber;

    function __construct($lower, $upper)
    {
        $this->output = new Output();
        $this->withLineNumber = new Output2();
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
            //    $this->output->withLinebreak("FizzBuzzZipp");
                $this->withLineNumber->withLineNumber($i, "FizzBuzzZipp");
            } elseif ($this->divisibleBy->fiveAndSeven($i)) {
            //    $this->output->withLinebreak("BuzzZipp");
                $this->withLineNumber->withLineNumber($i, "BuzzZipp");
            } elseif ($this->divisibleBy->threeAndFive($i)) {
            //    $this->output->withLinebreak("FizzBuzz");
                $this->withLineNumber->withLineNumber($i, "FizzBuzz");
            } elseif ($this->divisibleBy->threeAndSeven($i)) {
            //     echo("FizzZipp <br><br>");
            //    $this->output->withLinebreak("FizzZipp");
                $this->withLineNumber->withLineNumber($i, "FizzZipp");
            } elseif ($this->divisibleBy->three($i)) {
            //    $this->output->withLinebreak("Fizz");
                $this->withLineNumber->withLineNumber($i, "Fizz");
            } elseif ($this->divisibleBy->five($i)) {
            //    $this->output->withLinebreak("Buzz");
                $this->withLineNumber->withLineNumber($i, "Buzz");
            } elseif ($this->divisibleBy->seven($i)) {
            //    $this->output->Zipp();
                $this->withLineNumber->withLineNumber($i, "Zipp");
            } else {
            //    $this->output->withLinebreak("$i");
                $this->withLineNumber->withLineNumber($i, $i);
            }
        }
    }
}


