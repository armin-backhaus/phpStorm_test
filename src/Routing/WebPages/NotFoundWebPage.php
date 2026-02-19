<?php

namespace Routing\WebPages;

use Website\WebPage\AbstractWebPage;

class NotFoundWebPage extends AbstractWebPage
{

    public function getContent(): string
    {
        return "Not Found";
    }
}
