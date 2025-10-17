<?php

include_once __DIR__ . '/FizzBuzzInterface.php';

class FizzBuzzArray implements FizzBuzzInterface
{
    function run()
    {
        // TODO: Implement run() method.


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