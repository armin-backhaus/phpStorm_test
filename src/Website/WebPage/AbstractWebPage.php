<?php

namespace Website\WebPage;

abstract class AbstractWebPage
{
    abstract public function getContent(): string;
}