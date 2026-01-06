<?php

//<body>
function form()
{
    echo '
        <form action="" method="POST">
            <input type="text" name="my_text" placeholder="type something..." required>
            <button type="submit" name="send_data" value="12345" >display</button>
        </form>
    ';
}

function validateShipment()
{
    echo "<h3>your input:</h3>";
    if (isset($_POST['send_data'])) {
        $input = ($_POST['my_text']);

        var_dump($_POST);

        echo "<p>" . $input . "</p>";
    }
}
//</body>
//</html>

form();
validateShipment();

return ["formBlock"];
