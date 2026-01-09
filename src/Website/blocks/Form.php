<?php

namespace Website\blocks;

use Website\blocks;

//$dbBlock = include './src/Website/blocks/Database.php';
//<body>

class Form
{
    private $input;

    public function createInputForm(): array
    {
        ob_start();
        echo '
        <form action="" method="POST">
            <input type="text" name="my_text" placeholder="type something..." required>
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

            echo "<p>" . $this->input . "</p>";
        }
    }
}

//</body>
//</html>


//inputForm();
//validateShipment();

