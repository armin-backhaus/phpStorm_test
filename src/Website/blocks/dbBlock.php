<?php

$count = 0;

// https://de.wikipedia.org/wiki/SQL example to build

try {
    $mysqli = new mysqli("localhost", "root", "Password", "wow");
} catch (Exception $e) {
    die("Verbindung fehlgeschlagen: " . $e);
}

$name = "Hannes" . rand(1, 10);

$count = lookForName($name, $mysqli);

if ($count > 0) {
    showErrorFeedback();
} else {
    insertNewNameIntoDb($name, $mysqli);
    getAndShowAllNamesFromDb($mysqli);
}

function lookForName($name, $mysqli, $countFromDb = 0)
{
    $stmt = $mysqli->prepare("SELECT COUNT(*) FROM wow_test WHERE name = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $stmt->bind_result($countFromDb);
    $stmt->fetch();
    $stmt->close();

    return $countFromDb;
}

function insertNewNameIntoDb($name, $mysqli)
{
    $stmt = $mysqli->prepare("INSERT INTO wow_test (name) VALUES (?)");
    $stmt->bind_param("s", $name);

    if ($stmt->execute()) {
        echo "Eintrag erfolgreich hinzugefügt!";
    } else {
        echo "Fehler beim Hinzufügen des Eintrags: " . $stmt->error;
    }
    $stmt->close();

}

function getAndShowAllNamesFromDb($mysqli)
{
    $sql = "SELECT * FROM wow_test";
    $result = $mysqli->query($sql);
    var_dump($result);

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            var_dump($row);
            echo $row["name"] . "<br>";
        }

    } else {
        echo "Fehler beim Abrufen der Daten: " . $mysqli->error . "<br>";
    }
}

function showErrorFeedback()
{
    echo "Dieser Name existiert bereits!";
}
$mysqli->close();

return ["dbBlock"];
