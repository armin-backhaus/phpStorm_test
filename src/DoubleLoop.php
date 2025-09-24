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
        }

        echo "<br />";
    }

    private function innerLoop($i)
    {
        for ($j = 1; $j <= 3; $j++) {
            $this->output($i, $j);
        }
    }
    private function output($i, $j)
    {
        echo $i . "-" . $j . "<br />";
    }
}