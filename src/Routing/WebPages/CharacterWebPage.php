<?php

namespace Routing\WebPages;

use Website\alph1\Alph1Builder;
use Website\alph2\Alph2Builder;
use Website\alph3\Alph3Builder;
use Website\CharacterForm;
use Website\WebPage\AbstractWebPage;
use Website\WebsiteBuilder;

class CharacterWebPage extends AbstractWebPage
{

    public function getContent(): string
    {
        $myWebsite = new WebsiteBuilder();
        $websiteBuilder = new WebsiteBuilder();
        $builder1 = new Alph1Builder();
        $a1 = $builder1->build();
        $builder2 = new Alph2Builder();
        $a2 = $builder2->build();
        $builder3 = new Alph3Builder();
        $a3 = $builder3->build();
        $characterForm = new CharacterForm($myWebsite, $a3);
        $characterBlock = $characterForm->createCharacterForm();


        return implode(PHP_EOL, $characterBlock);
    }
}
