<?php

namespace Website\raceTrack;

class RacerA
{
    private $driverA;

    public function sitUp($driverA)
    {
        $this->driverA = $driverA;

        return "Driver sit on Honda";
    }

    public function descend()
    {
        return "Driver descend";
    }

}
