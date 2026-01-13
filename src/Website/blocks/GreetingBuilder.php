<?php

namespace Website\blocks;

use wow\Breed\BreedInterface;

class GreetingBuilder extends AbstractBuilder
{
    public function speak(): array
    {
        return [
            $this->genericSpeak($this->tyrande, "Hello"),
            $this->genericSpeak($this->caledra, "Hello"),
            $this->genericSpeak($this->thrall, "Hi"),
            $this->genericSpeak($this->anduin, "Yo"),
            $this->genericSpeak($this->dagran, "Grr"),
            $this->genericSpeak($this->dub, "Yeah"),
            $this->genericSpeak($this->lostWeeper, "Ssh"),

            $this->myWebsite->pTags(
                $this->group->everybodyGreets(),
            ),
        ];
    }

    private function genericSpeak(BreedInterface $character, string $greeting): string
    {
        return $this->myWebsite->pTags(
            $character->sayGreeting($greeting),
            $character->sayMyBreed(),
        );
    }
}
