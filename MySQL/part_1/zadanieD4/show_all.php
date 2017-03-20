<?php

include 'index.php';
include 'connection.php';

$conn = connectToCinemasDb();

// filmy
$sql = "SELECT * FROM movie";
$result = $conn->query($sql);

echo "<h2>Filmy</h2>";
foreach ($result as $row) {
    echo ("Tytuł: " . $row['name'] . "<br/>");
    echo ("Opis: " . $row['description'] . "<br/>");
    echo ("ID: " . $row['id'] . "<br/>");
    echo ("Średnia ocena: " . $row['rating'] . "<br/>");
    $id = $row['id'];
    echo "<a href=\"delete.php?del_movie=true&id=$id\">Usuń</a>";
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
    $id = $row['id'];
    echo "<a href=\"delete.php?del_cinema=true&id=$id\">Usuń</a>";
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
    $id = $row['id'];
    echo "<a href=\"delete.php?del_ticket=true&id=$id\">Usuń</a>";
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
    $id = $row['id'];
    echo "<a href=\"delete.php?del_payment=true&id=$id\">Usuń</a>";
    echo "<hr/>";
}

$conn->close();
$conn = null;
?>
