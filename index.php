<?php 
declare(strict_types = 1); 
echo(11);
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
  </head>

  <body>
    <div>
      <marquee>Hello World!</marquee>
    </div>
    <hr />
    <p> hello </p>
    <div>
      <button onclick="alert('DevsGoSlowBecomeFast!')">Klick mich!</button>
    </div>
    <script>
      for (let i=1; i <= 100; i++) {
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
      include('./src/DoubleLoop.php');
      (new DoubleLoop())->run();
      include('./src/OutputWithBothLoops.php');

      include('./src/FizzBuzz.php');
      include('./src/OutputWithLinebreak.php');
      include('./src/OutputWithLineNumbers.php');
      include('./src/OutputWithDoubleNumbers.php');
      include('./src/OutputWithEmote.php');
      include('./src/OutputWithColor.php');
      include('./src/OutputWithBeep.php');
      include('./src/OutputWithProgress.php');
      //$fizzBuzz = new FizzBuzz(13);
      //$fizzBuzz->run();

      (new FizzBuzz(1,7, new OutputWithLineNumbers()))->run();

      $outputObject = new OutputWithLinenumbers();
      $fizzBuzz1 = new FizzBuzz(1,7, $outputObject);
      $fizzBuzz1->run();

      (new FizzBuzz(3,9, new OutputWithLinebreak()))->run();

      $outputObject = new OutputWithLinebreak();
      $fizzBuzz2 = new FizzBuzz(3,9, $outputObject);
      $fizzBuzz2->run();

      (new FizzBuzz(3,9, new OutputWithDoubleNumbers()))->run();

      $outputObject = new OutputWithDoubleNumbers();
      $fizzBuzz3 = new FizzBuzz(3,9, $outputObject);
      $fizzBuzz3->run();

      (new FizzBuzz(9,3, new OutputWithLineNumbers()))->run();

      $outputObject = new OutputWithLinenumbers();
      $fizzBuzz4 = new FizzBuzz(3,9, $outputObject);
      $fizzBuzz4->run();

      (new FizzBuzz(1,9, new OutputWithEmote()))->run();

      $outputObject = new OutputWithEmote();
      $fizzBuzz5 = new FizzBuzz(1,9, $outputObject);
      $fizzBuzz5->run();

      (new FizzBuzz(1,9, new OutputWithColor()))->run();

      $outputObject = new OutputWithEmote();
      $fizzBuzz6 = new FizzBuzz(1,9, $outputObject);
      $fizzBuzz6->run();

      (new FizzBuzz(1,9, new OutputWithBothLoops()))->run();

      $outputObject = new OutputWithBothLoops();
      $fizzBuzz7 = new FizzBuzz(1,9, $outputObject);
      $fizzBuzz7->run();

      (new FizzBuzz(1,9, new OutputWithBeep()))->run();

      $outputObject = new OutputWithBeep();
      $fizzBuzz8 = new FizzBuzz(1,9, $outputObject);
      $fizzBuzz8->run();

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
