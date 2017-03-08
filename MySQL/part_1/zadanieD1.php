<?php
/* Napisz zapytanie, które usunie:

  wszystkie produkty, które zaczynają się na literę A,
  Wszystkie produkty z ceną większą od 6.

  Wszystkie zapytania dodaj do pliku php jako komentarz.

  Do skryptu z zadania B2. dopisz link (widoczny przy każdym elemencie wczytanym z bazy danych),
 * który usunie ten wpis z bazy. Zrób to na zasadzie przesyłania GET-em do innego pliku nazwy 
 * tablicy i id elementu, który chcesz usunąć. */

// wszystkie produkty, które zaczynają się na literę A
// DELETE FROM product WHERE name LIKE "A%";
// Wszystkie produkty z ceną większą od 6
// DELETE FROM product WHERE price > 6;

$serverName = "localhost";
$userName = "root";
$password = "coderslab";
$database = "exercises_db";

$conn = new mysqli($serverName, $userName, $password, $database);

if ($conn->connect_error) {
    die("Nieudane połączenie. Błąd: " . $conn->connect_error . " Kod błędu: " . $conn->connect_errno);
}

$sql = "SELECT * FROM product ORDER BY name DESC";
$result = $conn->query($sql);

$conn->close();
$conn = null;
?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zadanie D1</title>
    </head> 
    <body>
        <h3>Lista twoich produktów:</h3>
        <?php
        foreach ($result as $row) {
            echo ("ID: " . $row['id'] . "<br>");
            echo ("Name: " . $row['name'] . "<br>");
            echo ("Description: " . $row['description'] . "<br>");
            echo ("Price: " . $row['price'] . "<br>");
            ?>
            <a href="przykladowylink.pl?table=product&id=<?= $row['id'] ?>">Kasuj produkt</a> <?php
            echo "<hr>";
        }
        ?>
    </body>
</html>

