<?php

namespace Routing;
use Routing\WebPages\KitchenWebPage;
use Routing\WebPages\NotFoundWebPage;
use Routing\WebPages\RaceTrackWebPage;

class RouterBuilder
{
    public static function create(): Router
    {
        $routes = [
            "race_track" => new Route("race_track", new RaceTrackWebPage()),
            "kitchen" => new Route("kitchen", new KitchenWebPage()),
            "abc" => new Route("abc", new KitchenWebPage()),
            "404" => new Route("404", new NotFoundWebpage()),
        ];

        return new Router($routes);
    }
}
