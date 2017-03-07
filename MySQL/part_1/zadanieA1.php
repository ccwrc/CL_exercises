<?php

/* Stwórz nową bazę danych o nazwie exercises_db. Następnie napisz skrypt PHP, który stworzy 
 * połączenie do tej bazy danych. */

// stworzenie bazy: CREATE DATABASE exercises_db;

$serverName = "localhost";
$userName = "root"; // nigdy nie używac roota w praktyce, tworzyc dedykowanego do bazy usera
$password = "coderslab"; //i w praktyce nigdy nie udostepniac pliku, ktory te dane zawiera
// haslo generowac oddzielnie do kazdej bazy
$database = "exercises_db";

$conn = new mysqli(//nowy obiekt klasy mysqli
        $serverName, $userName, $password, $database);

if ($conn->connect_error) {
    die("Nie udało się połączyć z bazą. Błąd: " . $conn->connect_error . "<br/>");
} else {
    echo "Udało się połączyć z bazą. <br/>";
}

$conn->close(); // procedura zamykania polaczenia - obowiazkowa
$conn = null;  // niszczenie obiektu PO zamknięciu