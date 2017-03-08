<?php
/* Napisz zapytanie, które usunie:

  wszystkie kina, których ostatnia litera nazwy to Z,
  Wszystkie płatności starsze niż pięć dni.

  Wszystkie zapytania dodaj do pliku php jako komentarz.

  Do skryptu z zadania B4. dopisz link (widoczny przy każdym elemencie wczytanym z bazy danych),
 * który usunie ten wpis z bazy. Zrób to na zasadzie przesyłania GET-em do innego pliku 
 * nazwy tablicy i id elementu, który chcesz usunąć. */

// wszystkie kina, których ostatnia litera nazwy to Z
// DELETE FROM cinema WHERE name LIKE "%Z";

// Wszystkie płatności starsze niż pięć dni.
// DELETE FROM payment WHERE payment_date < NOW()-5;


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
    ?>
    <a href="przykladowylink.pl?table=movie&id=<?= $row['id'] ?>">kasuj</a> <?php
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
    ?>
    <a href="przykladowylink.pl?table=cinema&id=<?= $row['id'] ?>">kasuj</a> <?php
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
    ?>
    <a href="przykladowylink.pl?table=ticket&id=<?= $row['id'] ?>">kasuj</a> <?php
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
    ?>
    <a href="przykladowylink.pl?table=payment&id=<?= $row['id'] ?>">kasuj</a> <?php
    echo "<hr/>";
}

$conn->close();
$conn = null;
