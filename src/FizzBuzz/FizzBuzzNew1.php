<?php

namespace FizzBuzz;

class FizzBuzzNew1 extends AbstractFizzBuzz implements FizzBuzzInterface
{
    // no for individual constructor because parent constructor is called anyway...

    function run(): void
    {
        //guard clause
        $this->assertLoopDirection($this->lower, $this->upper);

        for ($i = $this->lower; $i <= $this->upper; $i++) {
            $output = "";
            if ($i % 3 == 0) {
                $output = $output . "Fizz";
            }
            if ($i % 5 == 0) {
                $output = $output . "Buzz";
            }
            if ($i % 7 == 0) {
                $output = $output . "Zipp";
            }
            if ($i % 11 == 0) {
                $output = $output . "Elv";
            }
            if ($i % 13 == 0) {
                $output = $output . "Thr";
            }
            if (empty($output)) {
                $output = $i;
            }
            $this->outputStrategy->output($output, $i);
        }
    }
}