<?php

namespace Website\kitchen;

class Casserole
{
    private int $duration = 0;

    public function backeForHours(int $duration)
    {
        $this->duration = $duration;

        return "Backing for $duration hours";
    }
    public function isReady()
    {
        if ($this->duration < 2) {
            return "<br>Casserole are raw </br>";
        } elseif ($this->duration > 6) {
            return "<br>Casserole is now Ash</br>";
        } else {
            return "<br>Casserole is perfect</br>";
        }
    }
}
