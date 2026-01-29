<?php

namespace Website\blocks\raceTrack;

class Presenter
{
    private $driverA;
    private $driverB;
    private GrossDoelln $grossDoelln;
    public function __construct($driverA, $driverB, $grossDoelln)
    {
        $this->driverA = $driverA;
        $this->driverB = $driverB;
        $this->grossDoelln = $grossDoelln;
    }

    public function theRaceStarts()
    {
        return "We got the green light, Ladys and Gentleman the Race is now on!";
    }

    public function theRaceEnds()
    {
        return "The Race is over!";
    }

    public function racersGoOntoTheTrack()
    {
        return "Racer is on the line!";
    }
    public function racersLeaveTheTrack()
    {
        return "Racer is no longer on the GrossDölln!";
    }

}
