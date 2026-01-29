<?php

namespace Website\blocks\raceTrack;

class RacerB
{
    private $driverB;

    public function sitUp($driverB)
    {
        $this->driverB = $driverB;

        return "Driver sit on Honda";
    }

    public function descend()
    {
        return "Driver descend";
    }

}
