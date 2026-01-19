<?php

namespace Website\blocks;

use mysqli;
use Website\blocks;

//$dbBlock = include './src/Website/blocks/Database.php';
//<body>

class Form
{
    private $input;
    private $input2;
    private $pdo;
    private $stmt;
    private Database $database;
    public function __construct(Database $database)
    {
        $this->database = $database;
    }
    public function createInputForm(): array
    {
        ob_start();
        echo '
        <form action="" method="POST">
            <input type="text" id="my_text" name="my_text" onchange=clickHandler() placeholder="type something..." />
            <button type="submit" name="send_data" value="12345" >display</button>
        </form>
    ';

        $this->showReceivedData();

        return [ob_get_clean()];
    }

    private function showReceivedData(): void
    {
        echo "<h3>your input:</h3>";

        if (isset($_POST['send_data'])) {
            $this->input = ($_POST['my_text']);

            var_dump($_POST);
            $this->database->insertNewNameIntoDb($this->input);

            echo "<p>" . $this->input . "</p>";
        }
    }

    private function insertNewNameIntoDb($name, $mysqli): void
    {
        $stmt = $mysqli->prepare("INSERT INTO wow_test (name) VALUES (?)");
        $stmt->bind_param("s", $name);

        if ($stmt->execute()) {
            echo "Added DB entry successfully !";
        } else {
            echo "Error while adding : " . $stmt->error;
        }
        $stmt->close();
    }
}

//</body>
//</html>


//inputForm();
//validateShipment();

