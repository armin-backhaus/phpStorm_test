<?php

namespace Routing;

use Website\WebPage\AbstractWebPage;

interface RouterInterface
{
    public function getRoutes(): array;
    public function getWebPageForURL(): AbstractWebPage;
}
