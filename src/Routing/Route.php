<?php

namespace Routing;


use Website\WebPage\AbstractWebPage;

class Route
{
    private String $contentId;
    private AbstractWebPage $webPage;

    public function __construct(String $contentId, AbstractWebPage $webPage)
    {
        $this->contentId = $contentId;
        $this->webPage = $webPage;
    }

    public function getContentId()
    {
        return $this->contentId;
    }

    public function getWebPage()
    {
        return $this->webPage;
    }
}
