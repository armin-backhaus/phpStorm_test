<?php



$mysqli = new mysqli("localhost", "root", "Password", "wow");

if ($mysqli->connect_error) {
    die("Verbindung fehlgeschlagen: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM wow_test";
$result = $mysqli->query($sql);

echo "bla";
while ($row = $result->fetch_assoc()) {
    echo $row["name"] . "<br>";
}


$mysqli->close();

return ["dbBlock"];