<?php

namespace Routing\WebPages;

use Website\blocks\Database;
use Website\blocks\Form;
use Website\WebPage\AbstractWebPage;
use Website\WebsiteBuilder;

class DbWebPage extends AbstractWebPage
{

    public function getContent(): string
    {
        $websiteBuilder = new WebsiteBuilder();
        $database = new Database();
        $form = new Form($database); // this is Dependency Injection....strong!
        $formBlock = $form->createInputForm();
        $dbBlock = $database->testDb();

        return implode(PHP_EOL, $formBlock);
    }
}
