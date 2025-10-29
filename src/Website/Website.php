<?php

namespace Website;

class Website
{
    public function run(): void
    {
        echo $this->docType();

        echo $this->htmlTags(
            $this->simpleHeader("My Title"),
            $this->simpleBody("Hello Website")
        );
    }

    private function docType(): string
    {
        return '<!DOCTYPE html>';
    }

    private function htmlTags(string $head, string $body): string
    {
        return "<html lang='en'>$head$body</html>";
    }

    private function simpleHeader(string $headText): string
    {
        return "<head><title>$headText</title></head>";
    }

    private function simpleBody(string $bodyText): string
    {
        return "<body><h1>$bodyText</h1></body>";
    }
}
