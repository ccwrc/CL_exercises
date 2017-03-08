<?php

/* Napisz zapytania SQL, które:

  Wybiorą wszystkie filmy na literę W.
  Wybiorą wszystkie bilety, których cena jest większa niż 15.30.
  Wybiorą wszystkie bilety, których ilość (liczba) jest większa niż trzy.
  Wybiorą wszystkie filmy, które mają rating większy niż 6.5.

  Wszystkie zapytania dodaj do pliku php jako komentarz.

  Napisz skrypt, który wyświetli na stronie wszystkie filmy, kina, bilety i płatności. */

// notka: w php bez średnika, w konsoli lub phpmyadmin komendy koncza sie srednikiem
// Wybiorą wszystkie filmy na literę W.
// SELECT * FROM movie WHERE name LIKE "w%";
// Wybiorą wszystkie bilety, których cena jest większa niż 15.30.
// SELECT * FROM ticket WHERE price > 15.30;
// Wybiorą wszystkie bilety, których ilość (liczba) jest większa niż trzy.
// SELECT * FROM ticket WHERE quantity > 3;
// Wybiorą wszystkie filmy, które mają rating większy niż 6.5.
// SELECT * FROM movie WHERE rating > 6.5;

function createDbConnection() {
    $serverName = "localhost";
    $userName = "root";
    $password = "coderslab";
    $database = "cinemas_db";
    return new mysqli($serverName, $userName, $password, $database);
}

$conn = createDbConnection();

if ($conn->connect_error) {
    die("Nieudane połączenie, błąd $conn->error, numer błędu $conn->errno ");
}

$sql = "SET CHARSET 'utf8'"; // ustawienie znakow pl
$result = $conn->query($sql);

// filmy
$sql = "SELECT * FROM movie";
$result = $conn->query($sql);

echo "<h2>Filmy</h2>";
foreach ($result as $row) {
    echo ("Tytuł: " . $row['name'] . "<br/>");
    echo ("Opis: " . $row['description'] . "<br/>");
    echo ("ID: " . $row['id'] . "<br/>");
    echo ("Średnia ocena: " . $row['rating'] . "<br/>");
    echo "<hr/>";
}

// kina
$sql = "SELECT * FROM cinema";
$result = $conn->query($sql);

echo "<h2>Kina</h2>";
foreach ($result as $row) {
    echo ("Nazwa: " . $row['name'] . "<br/>");
    echo ("Adres: " . $row['address'] . "<br/>");
    echo ("ID: " . $row['id'] . "<br/>");
    echo "<hr/>";
}

// bilety
$sql = "SELECT * FROM ticket";
$result = $conn->query($sql);

echo "<h2>Bilety</h2>";
foreach ($result as $row) {
    echo ("Cena: " . $row['price'] . "<br/>");
    echo ("Ilość: " . $row['quantity'] . "<br/>");
    echo ("ID: " . $row['id'] . "<br/>");
    echo "<hr/>";
}

// płatności
$sql = "SELECT * FROM payment";
$result = $conn->query($sql);

echo "<h2>Płatności</h2>";
foreach ($result as $row) {
    echo ("Typ: " . $row['payment_type'] . "<br/>");
    echo ("Data: " . $row['payment_date'] . "<br/>");
    echo ("ID: " . $row['id'] . "<br/>");
    echo "<hr/>";
}

$conn->close();
$conn = null;  