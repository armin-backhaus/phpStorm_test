<?php

namespace Website\blocks\raceTrack;

class Yamaha
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
        return "Yamaha is running";
    }

    public function turnBikeOff()
    {
        return "Send Yamaha to sleep";
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
