<?php

namespace Website;

class Website
{
    public function run(): void
    {
        echo $this->docType();
        echo $this->htmlOpener();
        echo $this->simpleHeader();
        echo $this->simpleBody();
        echo $this->htmlCloser();
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

    private function simpleHeader(): string
    {
        return "<head><title>Hello Title</title></head>";
    }

    private function simpleBody(): string
    {
        return "<body><h1>Hello Website</h1></body>";
    }
}
