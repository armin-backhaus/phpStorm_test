<?php

namespace Website;

class Website
{
    public function run(): void
    {
        echo $this->docType();

        $output = $this->htmlTags(
            $this->headTags(
                $this->titleTags("Wonderful Title")
            ),
            $this->bodyTags(
                $this->h1Tags("Hello Website")
            )
        );

        echo $output . PHP_EOL . PHP_EOL;
    }

    private function docType(): string
    {
        return '<!DOCTYPE html>' . PHP_EOL;
    }

    private function htmlTags(string $head, string $body): string
    {
        return "<html lang='en'>$head$body</html>" . PHP_EOL;
    }

    private function headTags(string $titleTags): string
    {
        return "<head>$titleTags</head>" . PHP_EOL;
    }

    private function titleTags(string $title): string
    {
        return "<title>$title</title>" . PHP_EOL;
    }

    private function bodyTags(string $content): string
    {
        return "<body>$content</body>" . PHP_EOL;
    }

    private function h1Tags(string $heading): string
    {
        return "<h1>$heading</h1>" . PHP_EOL;
    }
}
