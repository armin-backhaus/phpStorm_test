<?php

declare(strict_types=1);

namespace Website;

use FizzBuzz\FizzBuzzOld;
use Output\OutputWithColor;
use Routing\Route;

class WebsiteBuilder
{
    public function hrTag(): string
    {
        return "<hr/>";
    }

    public function bodyTags(string ...$contentArray): string
    {
        $output = "";

        foreach ($contentArray as $content) {
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

    public function h3Tags(string $heading): string
    {
        return "<h3>$heading</h3>" . PHP_EOL;
    }

    public function pTags(string ...$sentences): string
    {
        $output = "";

        foreach ($sentences as $sentence) {
            $output = $output . $sentence;
        }

        return "<p>$output</p>" . PHP_EOL;
    }

    public function scriptSrcTags(string $url): string
    {
        return "<script src='$url'></script>" . PHP_EOL;
    }

    public function menuButton()
    {
        ob_start();
        echo '
        <form action="" method="POST">
            <button type="" name="" value="" >display</button>
        </form>
    ';

        return [ob_get_clean()];

    }

    public function mapTag()
    {
        ob_start();
        echo '
        <img src="" alt="" usemap="" width="" height="">

        <map name="">
            <area shape="" coords="" heref ="">
        </map>
    ';

        return [ob_get_clean()];

    }

    public function iframeTag()
    {
        ob_start();
        echo '
        <iframe src="/" width="%" height="" style="border:1px solid black;">
        </iframe>

        <iframe src="/" width="%" height="" style="border:none;">
        </iframe>    ';

        return [ob_get_clean()];

    }
    public function divTag(string $content)
    {
        return '
        <div class="">
            ' . $content . ' 
        </div>    ';
    }
    public function menuArea(array $routes): string
    {
        $links = '';

        /** @var Route $route */
        foreach ($routes as $route) {
            $links .= '<a href="/phpStorm_test/' . $route->getContentId() . '">' . $route->getLabel() . '</a>&nbsp;&nbsp;';
        }

        //ob_start();
        return '
        <menu>' . $links . '</menu>
        <menu>
            <a href="/phpStorm_test/abc">Hello Menu</a>
            <a href="/phpStorm_test/kitchen">Kitchen</a>
            <a href="/phpStorm_test/race_track">Race_Track</a>
            <a href="/phpStorm_test/battle">Battle</a>
            <a href="/phpStorm_test/fizzBuzz">FizzBuzz</a>
            <a href="/phpStorm_test/wow">Wow</a>
            <a href="https://www.develolabs.com" target="_blank">Dlabs😎</a>
        </menu>
            ';

        //return [ob_get_clean()];

    }

}
