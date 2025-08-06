<?php
// repo_fallen-phenix
// Zipp on 7

$result = (int)(4 / 3);
echo "result: " . $result . "<br>";

$result2 = 9;
if ($result2 % 3 == 0) {
    $myBool = "true";
} else {
    $myBool = "false";
}
echo "result2: " . $myBool . "<br>";

echo("Hello World!");

// loop from 1-100 php mit "echo"!
for ($i = 1; $i <= 100; $i++) {
    // todo ascii tabelle
    // output current number
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz" . "<br>";
    } elseif ($i % 5 == 0) {
        echo "Buzz" . "<br>";
    } elseif ($i % 3 == 0) {
        echo "Fizz" . "<br>";
    } else {
        echo("test \"$i\" <br /> \n");
    }

}

// number as Fizz on 3

// var_dump(5 / 3);
// buzz on 5
$expressions = "GoSlowBecomeFast";
echo($expressions);
