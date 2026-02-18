<?php

namespace Routing;
use Routing\WebPages\BattleWebPage;
use Routing\WebPages\FizzBuzzWebPage;
use Routing\WebPages\KitchenWebPage;
use Routing\WebPages\NotFoundWebPage;
use Routing\WebPages\RaceTrackWebPage;
use Routing\WebPages\WowWebPage;

class RouterBuilder
{
    public static function create(): Router
    {
        $routes = [
            "race_track" => new Route("race_track", new RaceTrackWebPage()),
            "kitchen" => new Route("kitchen", new KitchenWebPage()),
            "battle" => new Route("battle", new BattleWebPage()),
            "fizzBuzz" => new Route("fizzBuzz", new FizzBuzzWebPage()),
            "wow" => new Route("wow", new WowWebPage()),
            "404" => new Route("404", new NotFoundWebpage()),
        ];

        return new Router($routes);
    }
}
