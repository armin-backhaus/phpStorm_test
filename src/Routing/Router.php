<?php

namespace Routing;

use Error;
use Website\WebPage\AbstractWebPage;

class Router implements RouterInterface
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

    public function getWebPageForURLold(): AbstractWebPage
    {
        $fullUrl = $_SERVER['REQUEST_URI'];
        $contentId = basename($fullUrl);

        //throw new Error("TODO go on from here: try/catch & if/else");

        $someRoute = $this->routes[$contentId];

        return $someRoute->getWebPage();
    }
    public function getWebPageForURL(): AbstractWebPage
    {
        $fullUrl = $_SERVER['REQUEST_URI'];
        $contentId = basename($fullUrl);

        $someRoute = @$this->routes[$contentId];

        try {
            return $someRoute->getWebPage();
        } catch (Error $error) {
            $notFound = $this->routes["404"];

            return $notFound->getWebPage();
        }
    }
    public function getWebPageForUrlTwo(): AbstractWebPage
    {
        $fullUrl = $_SERVER['REQUEST_URI'];
        $contentId = basename($fullUrl);

        $someRoute = @$this->routes[$contentId];

        if(isset($someRoute)) {
            return $someRoute->getWebPage();
        }

        $notFound = $this->routes["404"];

        return $notFound->getWebPage();
    }
}
