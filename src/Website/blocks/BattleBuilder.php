<?php

namespace Website\blocks;

use Website\Website;
use wow\Battle\Battle;

class BattleBuilder extends AbstractBuilder
{
    public function __construct()
    {
        parent::__construct();
    }
    public function battleTwoGroups(): array
    {
        $this->myWebsite = new Website();

        return [
            $this->myWebsite->h3Tags("Battle"),
            $this->myWebsite->pTags(
                (new Battle())->battleTwoGroups(
                    [$this->dub, $this->thrall, $this->dagran],
                    [$this->caledra, $this->anduin, $this->lostWeeper]
                )
            ),
        ];
    }
}
