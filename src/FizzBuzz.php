<?php
// if bedingung zu FizzBuzzZippZapp erweitern ! dont repeat yourself!
// wie kann ich bei Zipp einen 9 anstelle der 11 fehlerfrei nutzen?
// word dokument "was gemacht" für Arbeitszeugniss!!!!!
// class Output2 selbe ausgabe mit linenumber like ide, output 1x <br>! altes(neues) output zu nr2 umbauen, 1 nicht löschen!
// X classes mit anderen strategien für die ausgabe .👾👾👾 in index.php integrieren
//include_once dirname((__DIR__)) . '/src/outputZipp.php';
include_once __DIR__ . '/DivisibleBy.php';

class FizzBuzz
{
    private $divisibleBy;
    private $upper;
    private $lower;
    private $outputStrategy;

    function __construct($lower, $upper, OutputInterface $outputStrategy)
    {
        $this->divisibleBy = new DivisibleBy();

        $this->outputStrategy = $outputStrategy;

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
                $this->outputStrategy->output("FizzBuzzZipp", $i);
            } elseif ($this->divisibleBy->fiveAndSeven($i)) {
                $this->outputStrategy->output("BuzzZipp", $i);
            } elseif ($this->divisibleBy->threeAndFive($i)) {
                $this->outputStrategy->output("FizzBuzz", $i);
            } elseif ($this->divisibleBy->threeAndSeven($i)) {
                $this->outputStrategy->output("FizzZipp", $i);
            } elseif ($this->divisibleBy->three($i)) {
                $this->outputStrategy->output("Fizz", $i);
            } elseif ($this->divisibleBy->five($i)) {
                $this->outputStrategy->output("Buzz", $i);
            } elseif ($this->divisibleBy->seven($i)) {
                $this->outputStrategy->output("Zipp", $i);
            } else {
                $this->outputStrategy->output($i, $i);
            }
        }
    }
}


