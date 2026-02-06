<?php

namespace Routing;
use Routing\WebPages\KitchenWebPage;
use Routing\WebPages\RaceTrackWebPage;

class RouterBuilder
{
    public static function create(): Router
    {
        return new Router([
            "race_track" => new Route("race_track", new RaceTrackWebPage()),
            "kitchen" => new Route("kitchen", new KitchenWebPage()),
        ]);
    }
}
