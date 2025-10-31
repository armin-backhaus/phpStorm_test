<?php

declare(strict_types=1);

namespace Website;

use FizzBuzz\FizzBuzzOld;
use Output\OutputWithColor;

class Website
{
    public function hrTag(): string
    {
        return "<hr/>";
    }

    public function bodyTags(string ... $contentArray): string
    {
        $output = "";

        foreach($contentArray as $content) {
            $output = $output . $content;
        }

        return "<body>$output</body>" . PHP_EOL;
    }

    public function docType(): string
    {
        return '<!DOCTYPE html>' . PHP_EOL;
    }

    public function htmlTags(string $head, string $body): string
    {
        return "<html lang='en'>$head$body</html>" . PHP_EOL;
    }

    public function headTags(string $titleTags): string
    {
        return "<head>$titleTags</head>" . PHP_EOL;
    }

    public function titleTags(string $title): string
    {
        return "<title>$title</title>" . PHP_EOL;
    }

    public function h1Tags(string $heading): string
    {
        return "<h1>$heading</h1>" . PHP_EOL;
    }

    public function contentParagraph(string $paragraph): string
    {
        return "<p>$paragraph</p>" . PHP_EOL;
    }
}
