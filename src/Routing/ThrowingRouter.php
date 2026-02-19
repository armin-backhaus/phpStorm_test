<?php

namespace Routing;

use Error;
use Website\WebPage\AbstractWebPage;

class ThrowingRouter implements RouterInterface
{

    public function getRoutes(): array
    {
        throw new Error("Do Not Use");
    }

    public function getWebPageForURL(): AbstractWebPage
    {
        throw new Error("Do Not Use");
    }
}
