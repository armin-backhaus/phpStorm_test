<?php

namespace Website\blocks\raceTrack;

use Website\WebsiteBuilder;

class RaceControl
{

    public function __construct()
    {

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

    public function letsRace()
    {
        return "lets go";
    }
}
