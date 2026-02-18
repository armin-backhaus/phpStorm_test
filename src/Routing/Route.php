<?php

namespace Routing;


use Website\WebPage\AbstractWebPage;

class Route
{
    private String $contentId;
    private String $label;
    private AbstractWebPage $webPage;

    public function __construct(String $contentId, String $label, AbstractWebPage $webPage)
    {
        $this->contentId = $contentId;
        $this->label = $label;
        $this->webPage = $webPage;
    }

    public function getContentId(): string
    {
        return $this->contentId;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getWebPage(): AbstractWebPage
    {
        return $this->webPage;
    }
}
