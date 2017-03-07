<?php

/* W bazie danych o nazwie exercises_db stwórz następujące tabele:
  Product:
  id: int
  name: string
  description: string
  price: float(5,2)
  Order:
  id:int
  description: string
  Client:
  id: int
  name: string
  surname: string
 */

$serverName = "localhost";
$userName = "root";
$password = "coderslab";
$database = "exercises_db";

$conn = new mysqli($serverName, $userName, $password, $database);

if ($conn->connect_error) {
    die("Nie udało się połączyć z bazą. Błąd: " . $conn->connect_error . "<br/>" . "Kod błędu "
            . "to $conn->connect_errno");
} else {
    echo "Udało się połączyć z bazą. <br/>";
}

$sql = "CREATE TABLE IF NOT EXISTS product ("
        . "id int AUTO_INCREMENT,"
        . "name varchar(255) NOT NULL,"
        . "description blob,"
        . "price float(10,2),"
        . "PRIMARY KEY (id))";

$result = $conn->query($sql);

if ($result) {
    echo "Tabela product utworzona. <br/>";
} else {
    echo "Tabela nie została utworzona, błąd $conn->error ";
}

$sql = "CREATE TABLE IF NOT EXISTS myOrder (" // order jest slowem kluczowym w sql
        . "id int AUTO_INCREMENT,"
        . "description blob,"
        . "PRIMARY KEY (id))";

$result = $conn->query($sql);

if ($result) {
    echo "Tabela myOrder utworzona. <br/>";
} else {
    echo "Tabela nie została utworzona, błąd $conn->error ";
}

$sql = "CREATE TABLE IF NOT EXISTS client ("
        . "id int AUTO_INCREMENT,"
        . "name blob,"
        . "surname blob,"
        . "PRIMARY KEY (id))";

$result = $conn->query($sql);

if ($result) {
    echo "Tabela client utworzona. <br/>";
} else {
    echo "Tabela nie została utworzona, błąd $conn->error ";
}

$conn->close();
$conn = null;
