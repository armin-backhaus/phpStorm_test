<?php

namespace Website\blocks\raceTrack;

class Honda
{

    private $driverA;
    private $driverB;

    public function __construct($driverA, $driverB)
    {
        $this->driverA = $driverA;
        $this->driverB = $driverB;
    }


    public function turnBikeOn()
    {
        return "Honda is running";
    }

    public function turnBikeOff()
    {
        return "Send Honda to sleep";
    }

    public function gearBoxUp()
    {
        return "He hit the next gear";
    }
    public function gearBoxDpwn()
    {
        return "He take the further gear";
    }

    public function fullThrottle()
    {
        return "The driver is speeding up";
    }

    public function breake()
    {
        return "The driver is getting slower";
    }

}
