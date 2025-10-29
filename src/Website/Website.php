<?php

namespace Website;

class Website
{
    public function run(): void
    {
        echo $this->docType();
        echo $this->htmlOpener();
        echo $this->simpleHeader("My Title");
        echo $this->simpleBody("Hello Website");
        echo $this->htmlCloser();
        echo $this->htmlTags("h", "b");
    }

    private function docType(): string
    {
        return '<!DOCTYPE html>';
    }

    private function htmlOpener(): string
    {
        return '<html lang="en">';
    }

    private function htmlCloser(): string
    {
        return '</html>';
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
