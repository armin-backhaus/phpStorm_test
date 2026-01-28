<?php

namespace Website\blocks\kitchen;

class Spaghetti
{
    private int $duration = 0;

    public function cookForMinutes(int $duration)
    {
        $this->duration = $duration;

        return "Cooking for $duration minutes";
    }

    /*    public function isReady()
        {
            if ($this->duration < 9) {

                return "Spaghetti are raw";
            }

            return "Spaghetti are Al Dente";
        }*/
    public function isReady()
    {
        if ($this->duration < 9) {
            return "<br>Spaghetti are raw </br>";
        } elseif ($this->duration > 13) {
            return "<br>Spaghetti are no longer Spaghetti, Una tragedia!</br>";
        } else {
            return "<br>Spaghetti are Al Dente</br>";
        }
    }
}
