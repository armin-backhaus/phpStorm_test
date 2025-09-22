<?php
// double loop

/** Ausgabe :
 *
 * $i - $j
 * 1 - 1
 * 1 - 2
 * 1 - 3
 * 2 - 1
 * ...
 * 3 - 3
 */
class DoubleLoop
{
    function run()
    {
        for ($i = 1; $i <= 3; $i++) {
            for ($j = 1; $j <= 3; $j++) {
                echo $i . "-" . $j . "<br />";
            }
        }

        echo "<br>";
    }
}