<?php

namespace Routing\WebPages;

use Website\blocks\RaceBuilder;
use Website\blocks\raceTrack\GrossDoelln;
use Website\blocks\raceTrack\Honda;
use Website\blocks\raceTrack\RaceControl;
use Website\blocks\raceTrack\RacerA;
use Website\blocks\raceTrack\RacerB;
use Website\blocks\raceTrack\Yamaha;
use Website\WebPage\AbstractWebPage;
use Website\WebsiteBuilder;

class RaceTrackWebPage extends AbstractWebPage
{

    public function getContent(): string
    {
        $websiteBuilder = new WebsiteBuilder();
        $racerA = new RacerA();
        $racerB = new RacerB();
        $driverA = new RacerA();
        $driverB = new RacerB();
        $honda = new Honda($driverA, $driverB);
        $yamaha = new Yamaha($driverA, $driverB);
        $presenter = new RaceControl();
        $grossDoelln = new GrossDoelln($presenter, $driverA, $driverB, $honda, $yamaha);
        $track = new GrossDoelln($presenter, $driverA, $driverB, $honda, $yamaha);
        $raceControl = new RaceControl();
        $raceBuilder = new RaceBuilder($websiteBuilder, $raceControl, $grossDoelln, $honda, $yamaha, $racerA, $racerB);
        $raceBlock = $raceBuilder->createRace();

        return implode(PHP_EOL, $raceBlock);
    }
}
