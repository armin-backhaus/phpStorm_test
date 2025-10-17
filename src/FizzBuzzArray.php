<?php

include_once __DIR__ . '/OutputInterface.php';
class FizzBuzzArray implements OutputInterface

function fizzBuzzArray()

$o = '';
foreach ($this->checker as $checkObject) {
    if ($checkObject->check($i)) { $o = $o . $checkObject->getString(); }
}
if (empty($o)) { $o = $i; }
$this->outputStrategy->output($o, $i);