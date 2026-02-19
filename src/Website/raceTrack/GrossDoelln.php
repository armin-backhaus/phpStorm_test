<?php

namespace Website\raceTrack;

class GrossDoelln
{
    private  $raceControl;
    private  $driverA;
    private  $driverB;
    private Honda  $honda;
    private Yamaha $yamaha;

    public function __construct(RaceControl $raceControl, $driverA, $driverB, Honda $honda, Yamaha $yamaha)
    {
        $this->raceControl = $raceControl;
        $this->driverA = $driverA;
        $this->driverB = $driverB;
        $this->honda = $honda;
        $this->yamaha = $yamaha;
    }

    public function startEvent()
    {
        return $this->raceControl->letsRace();
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