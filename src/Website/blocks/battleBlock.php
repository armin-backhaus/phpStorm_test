<?php

use Website\Website;
use wow\Battle\Battle;

$website3 = new Website();

return [
    $website3->h3Tags("Battle"),
    $website3->pTags(
        (new Battle())->battleTwoGroups(
            [$dub, $thrall, $dagran],
            [$caledra, $anduin, $lostWeeper]
        )
    )
];
