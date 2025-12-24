<?php

// https://de.wikipedia.org/wiki/SQL example to build

try {
    $mysqli = new mysqli("localhost", "root", "Password", "wow");
} catch (Exception $e) {
    die("Connection failed: " . $e);
}

$count = 0;
$name = generateRandomName();
$count = lookForName($name, $mysqli);

if ($count > 0) {
    showErrorFeedback();
} else {
    insertNewNameIntoDb($name, $mysqli);
    getAndShowAllNamesFromDb($mysqli);
}

function generateRandomName(): string
{
    try {
        $name = "Hannes" . random_int(1, 10);
    } catch (Exception $e) {
        die("Rand int failed: " . $e);
    }
    return $name;
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

function insertNewNameIntoDb($name, $mysqli): void
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

function getAndShowAllNamesFromDb($mysqli): void
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
        echo "Error while fetching data: " . $mysqli->error . "<br>";
    }
}

function showErrorFeedback(): void
{
    echo "Name already exists!<br>!";
}

$mysqli->close();

return ["dbBlock"];
