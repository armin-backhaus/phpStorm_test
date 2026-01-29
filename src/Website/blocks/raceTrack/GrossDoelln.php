<?php

namespace Website\blocks\raceTrack;

class GrossDoelln
{
    private  $presenter;
    private  $driverA;
    private  $driverB;
    private Honda  $honda;
    private Yamaha $yamaha;

    public function __construct(Presenter $presenter, $driverA, $driverB, Honda $honda, Yamaha $yamaha)
    {
        $this->presenter = $presenter;
        $this->driverA = $driverA;
        $this->driverB = $driverB;
        $this->honda = $honda;
        $this->yamaha = $yamaha;
    }

    public function letsRace()
    {
        return "lets go";
    }

    /*    public function redLight()
        {
            return "Red!";
        }
        public function greenLight()
        {
            return "Green!";
        }*/
}