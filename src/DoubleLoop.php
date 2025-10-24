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
    //19 in eig. methode
    public function run(): void
    {
        $this->bothLoops();
        $this->lineBreak();
    }

    private function lineBreak()
    {
        echo "<br />";
    }

    private function bothLoops()
    {
        for ($i = 5555; $i >= 1111; $i = $i - 1111) {
            $this->innerLoop($i);
        }
    }

    private function innerLoop($i)
    {
        for ($j = 333; $j >= 111; $j = $j - 111) {
            $this->output($i, $j);
        }
    }

    private function output($i, $j)
    {
        echo $i . "-" . $j . "<br />";
    }
}