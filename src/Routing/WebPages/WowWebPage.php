<?php

namespace Routing\WebPages;

use Website\blocks\RaceBuilder;
use Website\blocks\raceTrack\GrossDoelln;
use Website\blocks\raceTrack\Honda;
use Website\blocks\raceTrack\RaceControl;
use Website\blocks\raceTrack\RacerA;
use Website\blocks\raceTrack\RacerB;
use Website\blocks\raceTrack\Yamaha;
use Website\blocks\WowBuilder;
use Website\WebPage\AbstractWebPage;
use Website\WebsiteBuilder;

class WowWebPage extends AbstractWebPage
{

    public function getContent(): string
    {
        $websiteBuilder = new WebsiteBuilder();
        $wowBuilder = new WowBuilder();
        $wowBlock = $wowBuilder->headline();

        return implode(PHP_EOL, $wowBlock);
    }
}
