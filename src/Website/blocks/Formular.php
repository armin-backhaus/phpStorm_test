<?php

//<body>
function formular()
{
    <form action="" method="POST">
        <input type="text" name="mein_text" placeholder="Schreib etwas..." required>
<button type="submit" name"absenden">Anzeigen</button>
</form>
}

function sendungsPrüfung()
{
    if (isset($_POST['absenden'])) {
        $eingabe = htmlspecialchars($_POST['mein_text']);

        echo "<h3>Deine Eingabe:</h3>";
        echo "<p>" . $eingabe . "</p>";
    }
}
//</body>
//</html>