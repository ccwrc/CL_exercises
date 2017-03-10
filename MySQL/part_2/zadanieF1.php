<?php

/* Stwórz nową tabelę Opinions zawierającą:

  description: string

  Tabela Opinions ma być połączona z tabelą Products relacją jeden do wielu (produkt ma wiele opinii,
 * opinia jest przypisana do jednego produktu). Napisz kilka zapytań, które dodadzą opinie do 
 * istniejących produktów. Napisz stronę, na której wyświetlają się wszystkie produkty. Pod każdym 
 * produktem mają wyświetlić się opinie do niego. */

// tworzenie tabeli Opinions
//    CREATE TABLE Opinions(
//    id int NOT NULL AUTO_INCREMENT,
//    description text,
//    product_id int(11) NOT NULL,
//    PRIMARY KEY(id),
//    FOREIGN KEY(product_id) REFERENCES product(id)
//    ON DELETE CASCADE
//    );
// tworzenie opinii
// INSERT INTO `Opinions` (`id`, `description`, `product_id`) VALUES (NULL, 'opinia 4', '6');

$serverName = "localhost";
$userName = "root";
$password = "coderslab";
$database = "exercises_db";
$conn = new mysqli($serverName, $userName, $password, $database);

if ($conn->connect_error) {
    die('Błąd połączenia' . $conn->connect_error);
}

// ustawienie poprawnego wyswietlania znakow PL
$setEncodingSql = "SET CHARSET utf8";
$conn->query($setEncodingSql);

$sql = "SELECT p.id, p.name, p.price, p.description AS product_description, o.description AS 
    opinion_description FROM product p LEFT JOIN Opinions o ON p.id = o.product_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $lastProductId = 0;

    foreach ($result as $row) {
        if ($lastProductId != $row['id']) {
            $lastProductId = $row['id'];
            echo "<br/><br/>Produkt: <br/>";
            echo "Nazwa: " . $row['name'] . "<br/>";
            echo "Cena: " . $row['price'] . "<br/>";
            echo "Opinie: <br/>";
        }
        if (!is_null($row['opinion_description'])) {
            echo "opinia: ";
            echo $row['opinion_description'] . "<br/>";
        }
    }
} else {
    echo "Nie udało się pobrać danych, błąd: " . $conn->error;
}

$conn->close();
$conn = null;
