<?php

namespace FizzBuzz;

use DivisibleCheck\CheckEleven;
use DivisibleCheck\CheckFive;
use DivisibleCheck\CheckSeven;
use DivisibleCheck\CheckThree;
use Output\OutputInterface;

class FizzBuzzArray extends AbstractFizzBuzz implements FizzBuzzInterface
{
    private array $checker;

    public function __construct(int $lower, int $upper, OutputInterface $outputStrategy)
    {
        parent::__construct($lower, $upper, $outputStrategy);

        $this->checker = [];
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
            $o = '';
            foreach ($this->checker as $checkObject) {
                if ($checkObject->check($i)) {
                    $o = $o . $checkObject->getString();
                }
            }
            if (empty($o)) {
                $o = $i;
            }
            $this->outputStrategy->output($o, $i);
        }
    }
}