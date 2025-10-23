<?php
declare(strict_types=1);

require_once 'vendor/autoload.php';

use Divisible\DivisibleChecker;
use FizzBuzz\FizzBuzz;
use FizzBuzz\FizzBuzzArray;
use FizzBuzz\FizzBuzzNew1;
use FizzBuzz\FizzBuzzNew2;
use Output\OutputWithBeep;
use Output\OutputWithBothLoops;
use Output\OutputWithColor;
use Output\OutputWithDoubleNumbers;
use Output\OutputWithEmote;
use Output\OutputWithLinebreak;
use Output\OutputWithLineNumbers;
use Output\OutputWithProgress;

echo(11);
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
</head>

<body>
<div>
    <marquee>Hello World!</marquee>
</div>
<hr/>
<p> hello </p>
<div>
    <button onclick="alert('DevsGoSlowBecomeFast!')">Klick mich!</button>
</div>
<script>
    for (let i = 1; i <= 100; i++) {
        // todo ascii tabelle
        console.log("test" + i)
    }
</script>
<div>
    <?php echo "Hannes Beste!"; ?>
</div>

<div>
    <p>FizzBuzz</p>

    <?php
    //include_once('./src/DoubleLoop.php');
    //include_once('./src/OutputWithBothLoops.php');
    //include_once('./src/FizzBuzz/FizzBuzz.php');
    //include_once('./src/OutputWithLinebreak.php');
    //include_once('./src/OutputWithLineNumbers.php');
    //include_once('./src/OutputWithDoubleNumbers.php');
    //include_once('./src/OutputWithEmote.php');
    //include_once('./src/OutputWithColor.php');
    //include_once('./src/OutputWithBeep.php');
    //include_once('./src/OutputWithProgress.php');
    //include_once('./src/Divisible/DivisibleChecker.php');
    //include_once('./src/FizzBuzz/FizzBuzzOld.php');
    //include_once('./src/FizzBuzz/FizzBuzzNew1.php');
    //include_once('./src/FizzBuzz/FizzBuzzNew2.php');
    //include_once('./src/FizzBuzz/FizzBuzzArray.php');
    //$fizzBuzz = new FizzBuzz(13);
    //$fizzBuzz->run();
    $fizzBuzzArray = new FizzBuzzArray(1, 7, new OutputWithColor());
    $fizzBuzzArray->run();

    function outputName($name)
    {
        echo "hello $name <br />";
    }

    (new DoubleLoop())->run();

    outputName("Hannes");
    outputName("Armin");
    $divisibleChecker = new DivisibleChecker();
    $divisibleChecker->test("dub");
    echo "<br /><br />";


    $fizzBuzzNew1 = new FizzBuzzNew1(1, 7, new OutputWithColor());
    $fizzBuzzNew1->run();

    $fizzBuzzNew2 = new FizzBuzzNew2(1, 7, new OutputWithEmote());
    $fizzBuzzNew2->run();

    echo "end";
    //(new FizzBuzz(1, 7, new OutputWithLineNumbers()))->run();

    //$outputObject = new OutputWithLinenumbers();
    //$fizzBuzz1 = new FizzBuzzOld(1, 7, $outputObject);
    //FizzBuzzNew1
    //FizzBuzzNew2
    //FizzBuzzArray
    //$fizzBuzz1->run();

    (new FizzBuzz(3, 9, new OutputWithLinebreak()))->run();

    $outputObject = new OutputWithLinebreak();
    $fizzBuzz2 = new FizzBuzz(3, 9, $outputObject);
    $fizzBuzz2->run();

    (new FizzBuzz(3, 9, new OutputWithDoubleNumbers()))->run();

    $outputObject = new OutputWithDoubleNumbers();
    $fizzBuzz3 = new FizzBuzz(3, 9, $outputObject);
    $fizzBuzz3->run();

    (new FizzBuzz(9, 3, new OutputWithLineNumbers()))->run();

    $outputObject = new OutputWithLinenumbers();
    $fizzBuzz4 = new FizzBuzz(3, 9, $outputObject);
    $fizzBuzz4->run();

    (new FizzBuzz(1, 9, new OutputWithEmote()))->run();

    $outputObject = new OutputWithEmote();
    $fizzBuzz5 = new FizzBuzz(1, 9, $outputObject);
    $fizzBuzz5->run();

    (new FizzBuzz(1, 9, new OutputWithColor()))->run();

    $outputObject = new OutputWithEmote();
    $fizzBuzz6 = new FizzBuzz(1, 9, $outputObject);
    $fizzBuzz6->run();

    (new FizzBuzz(1, 9, new OutputWithBothLoops()))->run();

    $outputObject = new OutputWithBothLoops();
    $fizzBuzz7 = new FizzBuzz(1, 9, $outputObject);
    $fizzBuzz7->run();

    (new FizzBuzz(1, 9, new OutputWithBeep()))->run();

    $outputObject = new OutputWithBeep();
    $fizzBuzz8 = new FizzBuzz(1, 9, $outputObject);
    $fizzBuzz8->run();

    (new FizzBuzz(1, 9, new OutputWithProgress()))->run();

    $outputObject = new OutputWithProgress();
    #000a53 = new OutputWithProgress();
    $fizzBuzz9 = new FizzBuzz(1, 9, $outputObject);
    $fizzBuzz9->run();

    //(new FizzBuzz(1,9, new OutputWithDoubleNumbers()))->genericLoop();
    ?>

    <p>FizzBuzz ende</p>
</div>

<div>
    <progress value="70" max="100"></progress>
</div>

<div>
    <?php echo "XAMPP -> Apache server -> verzeichnis in htdocs -> index.php -> phpStorm .html -> bowser tadaa!"; ?>
</div>
</body>
</html>
