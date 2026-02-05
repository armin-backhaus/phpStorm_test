<?php

namespace Website\blocks;

use Website\blocks\raceTrack\GrossDoelln;
use Website\blocks\raceTrack\Honda;
use Website\blocks\raceTrack\RaceControl;
use Website\blocks\raceTrack\RacerA;
use Website\blocks\raceTrack\RacerB;
use Website\blocks\raceTrack\Yamaha;
use Website\WebsiteBuilder;

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
