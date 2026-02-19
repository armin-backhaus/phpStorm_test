<?php

namespace Website\kitchen;

class Stove
{
    private bool $isOn = false;
    private int $temperature = 0;
    public function __destruct()
    {
        if ($this->isOn) {
            echo "Automatic: " . $this->off();
        }
    }
    public function on(int $temperature = 200)
    {
        $this->isOn = true;
        $this->temperature = $temperature;

        return "Stove is on " . $this->temperature;
    }

    public function off()
    {
        $this->isOn = false;
        $this->temperature = 0;

        return "Stove is off";
    }

    public function putSomethingOnHeat($pot)
    {
        return "Something is on Heat";
    }

    public function putSomethingIntoHeat($casseroleDish)
    {
        return "Something is In Heat";
    }
}
