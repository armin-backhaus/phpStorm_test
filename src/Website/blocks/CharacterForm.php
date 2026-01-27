<?php

namespace Website\blocks;

use Website\blocks\alph1\A as A1;
use Website\blocks\alph2\A as A2;
use Website\blocks\alph3\A as A3;
use Website\blocks\alph3\Alph3Builder;
use Website\WebsiteBuilder;


class CharacterForm
{
    private WebsiteBuilder $websiteBuilder;
    private A1 | A2 | A3 $a;
    public function __construct(WebsiteBuilder $websiteBuilder, $a)
    {
        $this->websiteBuilder = $websiteBuilder;
        $this->a = $a;
    }
    public function createCharacterForm(): array
    {
        ob_start();

        echo $this->websiteBuilder->h3Tags("Character Form");

        echo "hallo " . $this->a->aa() . "<br />";
        //echo("extra " . $this->a->b->c->cc());

        echo '
        <form action="" method="POST">
            <input type="text" name="my_text" placeholder="type something..." />
            <button type="submit" name="send_data" value="8" >display</button>
        </form>
        ';

        $buffer = ob_get_clean();

        return [$buffer];
    }
}
