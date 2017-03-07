<?php
/* Stwórz nową bazę danych o nazwie cinemas_db. Kod MySQL zapisz jako komentarz. Następnie 
 * napisz skrypt PHP, który stworzy połączenie do tej bazy danych. */

// kod SQL: CREATE DATABASE IF NOT EXISTS cinemas_db; 

$serverName = "localhost";
$userName = "root";
$password = "coderslab";
$database = "cinemas_db";

$conn = new mysqli($serverName, $userName, $password, $database);

if ($conn->connect_error) {
    die("Nie udało się połączyć z bazą. Błąd: " . $conn->connect_error . "<br/>" . "Kod błędu "
            . "to $conn->connect_errno");
} else {
    echo "Udało się połączyć z bazą. <br/>";
}