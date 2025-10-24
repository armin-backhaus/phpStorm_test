<?php

namespace FizzBuzz;

// if bedingung zu FizzBuzzZippZapp erweitern ! dont repeat yourself!
// wie kann ich bei Zipp einen 9 anstelle der 11 fehlerfrei nutzen?
// word dokument "was gemacht" für Arbeitszeugniss!!!!!
// class Output2 selbe ausgabe mit linenumber like ide, output 1x <br>! altes(neues) output zu nr2 umbauen, 1 nicht löschen!
// X classes mit anderen strategien für die ausgabe .👾👾👾 in index.php integrieren
//1 methode "genericLoop($start, $end, $step)"public & index
use Divisible\DivisibleBy;
use DivisibleCheck\CheckEleven;
use DivisibleCheck\CheckFive;
use DivisibleCheck\CheckSeven;
use DivisibleCheck\CheckThree;
use Error;
use Output\OutputInterface;


class FizzBuzz extends AbstractFizzBuzz implements FizzBuzzInterface
{
    private $divisibleBy;
    private $upper;
    private $lower;
    private $outputStrategy;

    private $checkThree;
    private $checkFive;
    private $checkSeven;

    private array $checker;

    function __construct($lower, $upper, OutputInterface $outputStrategy)
    {
        $this->divisibleBy = (new DivisibleBy());

        $this->outputStrategy = $outputStrategy;

        $this->upper = $upper;
        $this->lower = $lower;

        $this->checkThree = new CheckThree();
        $this->checkFive = new CheckFive();
        $this->checkSeven = new CheckSeven();

//        $this->checker = [];
        $this->checker[] = new CheckThree();
        $this->checker[] = new CheckFive();
        $this->checker[] = new CheckSeven();
        $this->checker[] = new CheckEleven();


    }


    function run(): void
    {
        //guard clause
        $this->assertLoopDirection($this->lower, $this->upper);


        for ($i = $this->lower; $i <= $this->upper; $i++) {

            // => class FizzBuzzArray
            $o = '';
            foreach ($this->checker as $checkObject) {
                if ($checkObject->check($i)) { $o = $o . $checkObject->getString(); }
            }
            if (empty($o)) { $o = $i; }
            $this->outputStrategy->output($o, $i);

            // => class FizzBuzzNew2
            $out = '';
            if ($this->checkThree->check($i)) { $out = $out . "Fizz"; }
            if ($this->checkFive->check($i)) { $out = $out . "Buzz"; }
            if ($this->checkSeven->check($i)) { $out = $out . "Zipp"; }
            if (empty($out)) { $out = $i; }
            $this->outputStrategy->output($out, $i);

            // => class FizzBuzzNew1
            $output = "";
            if ($i % 3 == 0) {$output = $output . "Fizz";}
            if ($i % 5 == 0) {$output = $output . "Buzz";}
            if ($i % 7 == 0){$output = $output . "Zipp";}
            if ($i % 11 == 0){$output = $output . "Elv";}
            if ($i % 13 == 0){$output = $output . "Thir";}
            if (empty($output)) {$output = $i;}
            $this->outputStrategy->output($output , $i);

            // => class FizzBuzzOld
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
