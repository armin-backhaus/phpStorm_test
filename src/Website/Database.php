<?php

namespace Website;

use Exception;
use mysqli;

class Database
{
    private mysqli $mysqli;

    public function __construct()
    {
        try {
            $this->mysqli = new mysqli("localhost", "root", "Password", "wow");
        } catch (Exception $e) {
            die("Connection failed: " . $e);
        }
    }

    public function __destruct()
    {
        $this->mysqli->close();
    }

    public function testDb(): array
    {
        ob_start();

        $count = 0;
        $name = $this->generateRandomName();
        $count = $this->lookForName($name);


        if ($count > 0) {
            $this->showErrorFeedback();
        } else {
            $this->insertNewNameIntoDb($name);
            $this->getAndShowAllNamesFromDb();
        }

        $output = ob_get_clean();

        return [$output];
    }

    private function generateRandomName(): string
    {
        try {
            $name = "Hannes" . random_int(1, 10);
        } catch (Exception $e) {
            die("Rand int failed: " . $e);
        }
        return $name;
    }

    private function lookForName(string $name, int $countFromDb = 0): int
    {
        $stmt = $this->mysqli->prepare("SELECT COUNT(*) FROM wow_test WHERE name = ?");
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $stmt->bind_result($countFromDb);
        $stmt->fetch();
        $stmt->close();

        return $countFromDb;
    }

    public function insertNewNameIntoDb($name): void
    {
        $stmt = $this->mysqli->prepare("INSERT INTO wow_test (name) VALUES (?)");
        $stmt->bind_param("s", $name);

        if ($stmt->execute()) {
            echo "Added DB entry successfully !";
        } else {
            echo "Error while adding : " . $stmt->error;
        }
        $stmt->close();
    }

    private function getAndShowAllNamesFromDb(): void
    {
        $sql = "SELECT * FROM wow_test";
        $result = $this->mysqli->query($sql);
        var_dump($result);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                var_dump($row);
                echo $row["name"] . "<br>";
            }

        } else {
            echo "Error while fetching data: " . $this->mysqli->error . "<br>";
        }
    }

    private function showErrorFeedback(): void
    {
        echo "Name already exists!<br>!";
    }
}

// https://de.wikipedia.org/wiki/SQL example to build
