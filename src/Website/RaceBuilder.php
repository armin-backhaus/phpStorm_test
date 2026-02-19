<?php

namespace Website;

use Website\raceTrack\GrossDoelln;
use Website\raceTrack\Honda;
use Website\raceTrack\RaceControl;
use Website\raceTrack\RacerA;
use Website\raceTrack\RacerB;
use Website\raceTrack\Yamaha;

class RaceBuilder
{
    private WebsiteBuilder $websiteBuilder;
    private RaceControl $raceControl;
    private GrossDoelln $grossDoelln;
    private Honda $honda;
    private Yamaha $yamaha;
    private RacerA $racerA;
    private RacerB $racerB;

    public function __construct(WebsiteBuilder $websiteBuilder, RaceControl $raceControl, GrossDoelln $grossDoelln, Honda $honda, Yamaha $yamaha, RacerA $racerA, RacerB $racerB)
    {
        $this->websiteBuilder = $websiteBuilder;
        $this->raceControl = $raceControl;
        $this->grossDoelln = $grossDoelln;
        $this->honda = $honda;
        $this->yamaha = $yamaha;
        $this->racerA = $racerA;
        $this->racerB = $racerB;
    }

    public function createRace(): array
    {
        ob_start();

        echo $this->websiteBuilder->h3Tags("Race");

        echo $this->raceControl->letsRace();

        $buffer = ob_get_clean();

        return [$buffer];

    }
}
