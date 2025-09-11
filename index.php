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
      <?php include('./src/FizzBuzz.php'); ?>
      <p>FizzBuzz ende</p>
    </div>

    <div>
      <progress value="70" max="100"></progress>
    </div>

    <div>
      <?php echo "XAMPP -> Apache server -> verzeichnis in htdocs -> index.php -> vs code html -> bowser tadaa!"; ?>
    </div>
  </body>
</html>
