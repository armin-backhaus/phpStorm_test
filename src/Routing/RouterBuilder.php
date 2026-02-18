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
            "race_track" => new Route("race_track", 'Race', new RaceTrackWebPage()),
            "kitchen" => new Route("kitchen", 'Kitchen',  new KitchenWebPage()),
            "battle" => new Route("battle", 'Battle',  new BattleWebPage()),
            "fizzBuzz" => new Route("fizzBuzz", 'Buzzy Fizzing',  new FizzBuzzWebPage()),
            "wow" => new Route("wow", 'WOW',  new WowWebPage()),
            "404" => new Route("404", 'Not Found',  new NotFoundWebpage()),

            // TODO maybe ?
            // "dlabs" => new Route("dlabs", 'DLabs',  new RedirectWebpage()),
        ];

        return new Router($routes);
    }
}
