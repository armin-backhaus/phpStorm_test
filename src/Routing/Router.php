<?php

namespace Routing;

use Error;
use Website\WebPage\AbstractWebPage;

class Router
{
    /** @var Route[] $routes */
    private array $routes;

    public function __construct(Array $routes)
    {
        $this->routes = $routes;
    }
    public function getRoutes(): array
    {
        return $this->routes;
    }

    public function getWebPageById(string $contentIdxxx): AbstractWebPage
    {
        $fullUrl = $_SERVER['REQUEST_URI'];
        $contentId = basename($fullUrl);

        throw new Error("TODO go on from here");

        $someRoute = $this->routes[$contentId];

        return $someRoute->getWebPage();
    }
}
