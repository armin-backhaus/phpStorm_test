<?php

// https://de.wikipedia.org/wiki/SQL example to build

$mysqli = new mysqli("localhost", "root", "Password", "wow");

if ($mysqli->connect_error) {
    die("Verbindung fehlgeschlagen: " . $mysqli->connect_error);
}
$name = "Hannes";

$stmt = $mysqli->prepare("INSERT INTO wow_test (name) VALUES (?)");
$stmt->bind_param("s", $name);

if ($stmt->execute()) {
    echo "Eintrag erfolgreich hinzugefügt!";
} else {
    echo "Fehler beim Hinzufügen des Eintrags: " . $stmt->error;
}

$sql = "SELECT * FROM wow_test";
$result = $mysqli->query($sql);
var_dump($result);

while ($row = $result->fetch_assoc()) {
    var_dump($row);
    echo $row["name"] . "<br>";
}

$mysqli->close();
$stmt->close();

return ["dbBlock"];