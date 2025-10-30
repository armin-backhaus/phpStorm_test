<?php

namespace Learning;

use PHPUnit\Framework\TestCase;

class MultiParameterTest extends TestCase
{
    final public function test()
    {
        $var1 = "Var1";
        $var2 = "Var2";
        $var3 = "Var3";

        $myArray = [$var1, $var2, $var3];

        $result = $this->myFunction($myArray);

        $this->assertEquals("Var1Var2Var3", $result);
    }

    function myFunction(array $parameterArray): string
    {
        $output = "";

        foreach($parameterArray as $parameter) {
            $output = $output . $parameter;
        }

        // Alternative Solution
        // $output = implode('', $parameterArray);

        return $output;
    }
}