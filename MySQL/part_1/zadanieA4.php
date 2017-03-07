<?php

/* W bazie danych o nazwie cinemas_db stwórz następujące tabele:

  Kino:
  id: int
  name: string
  address: string
  Film:
  id: int
  name: string
  opis: string
  Bilet:
  id: int
  ilość: int
  cena: float

  Płatność:
  id: int
  typ: string
  data: date

  Załóż odpowiednie atrybuty na pola (np. każde id powinno być kluczem głównym,
  być automatycznie numerowane).
  Napisz odpowiednie zapytania SQL, używając phpMyAdmin (lub konsoli).
  Pamiętaj o stworzeniu i zamknięciu połączenia.
  Jeżeli tabela już istnieje, to nie da się jej stworzyć.
  Dokładnie czytaj kody błędów zwracane przez MySQL. */

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

// kino
$sql = "CREATE TABLE IF NOT EXISTS cinema ("
        . "id int AUTO_INCREMENT,"
        . "name varchar(255) NOT NULL,"
        . "address varchar(255),"
        . "PRIMARY KEY (id))";

$result = $conn->query($sql);
if ($result) {
    echo "Tabela cinema utworzona <br/>";
} else {
    die("Błąd $conn->error");
}

// film
$sql = "CREATE TABLE IF NOT EXISTS movie ("
        . "id int AUTO_INCREMENT,"
        . "name varchar(255) NOT NULL,"
        . "description varchar(255),"
        . "PRIMARY KEY (id))";

$result = $conn->query($sql);
if ($result) {
    echo "Tabela movie utworzona <br/>";
} else {
    die("Błąd $conn->error");
}

// bilet
$sql = "CREATE TABLE IF NOT EXISTS ticket ("
        . "id int AUTO_INCREMENT,"
        . "quantity int,"
        . "price float(5,2),"
        . "PRIMARY KEY (id))";

$result = $conn->query($sql);
if ($result) {
    echo "Tabela ticket utworzona <br/>";
} else {
    die("Błąd $conn->error");
}

// płatność
$sql = "CREATE TABLE IF NOT EXISTS payment ("
        . "id int AUTO_INCREMENT,"
        . "payment_type varchar(255),"
        . "payment_date date,"
        . "PRIMARY KEY (id))";

$result = $conn->query($sql);
if ($result) {
    echo "Tabela payment utworzona <br/>";
} else {
    die("Błąd $conn->error");
}


// wersja alternatywna ponizej
// $createTableSql = ['cinema' => "CREATE TABLE IF NOT EXISTS cinema (
//    id int AUTO_INCREMENT,
//    name varchar(255) NOT NULL,
//    address varchar(255) NOT NULL,
//    PRIMARY KEY (id)
//    )",
//    'movie' => "CREATE TABLE IF NOT EXISTS movie (
//    id int AUTO_INCREMENT,
//    name varchar(255) NOT NULL,
//    description blob,
//    PRIMARY KEY (id)
//    )",
//    'ticket' => "CREATE TABLE IF NOT EXISTS ticket (
//    id int AUTO_INCREMENT,
//    ticket_quantity int,
//    ticket_price float(5,2),
//    PRIMARY KEY (id)
//    )",
//    'payment' => "CREATE TABLE IF NOT EXISTS payment (
//    id int AUTO_INCREMENT,
//    payment_type varchar(255),
//    payment_date date,
//    PRIMARY KEY (id)
//    )"];
//
//foreach ($createTableSql as $tableName => $sql) {
//    $result = $conn->query($sql);
//    if ($result != FALSE) {
//        echo "Tabela $tableName została utworzona. <br>";
//    } else {
//        echo "Tabela $tableName nie została utworzona, błąd $conn->error <br>";
//        die;
//    }
//}

$conn->close();
$conn = null;
