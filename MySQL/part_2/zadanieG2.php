<?php

/* Połącz tabele Products i Orders relacją wiele do wielu. Napisz kilka zapytań, które połączą 
 * produkty z zamówieniami.

  Napisz stronę, na której będą widoczne:

  wszystkie zamówienia,
  wszystkie produkty należące do zamówienia (pod spodem).

  Napisz stronę, na której będą widoczne:

  wszystkie produkty,
  zamówienia, w których ten produkt się pojawił (pod spodem). */


// tworzenie tabeli
//    CREATE TABLE ProductOrder(
//    id int AUTO_INCREMENT NOT NULL,
//    order_id int NOT NULL,
//    product_id int NOT NULL,
//    PRIMARY KEY(id),
//    FOREIGN KEY(order_id) REFERENCES myOrder(id),
//    FOREIGN KEY(product_id) REFERENCES product(id)
//    );
// przyklad wkladania danych do tabeli
// INSERT INTO `ProductOrder` (`id`, `order_id`, `product_id`) VALUES (NULL, '1', '2');

$serverName = "localhost";
$userName = "root";
$password = "coderslab";
$database = "exercises_db";
$conn = new mysqli($serverName, $userName, $password, $database);

if ($conn->connect_error) {
    die('Błąd połączenia' . $conn->connect_error);
}

$setEncodingSql = "SET CHARSET utf8";
$conn->query($setEncodingSql);

//  wszystkie zamówienia,
//  wszystkie produkty należące do zamówienia (pod spodem).
echo "<hr/> <b>wszystkie zamówienia</b>";

$sqlOrder = "SELECT * FROM myOrder LEFT JOIN ProductOrder ON myOrder.id=ProductOrder.order_id 
JOIN product ON ProductOrder.product_id=product.id 
ORDER BY myOrder.id ASC";

$resultOrder = $conn->query($sqlOrder);

if ($resultOrder->num_rows > 0) {
    $lastOrderId = 0;
    foreach ($resultOrder as $row) {
        if ($lastOrderId != $row['order_id']) {
            $lastOrderId = $row['order_id'];
            echo "<br/><br/> ID zamówienia: " . $row['order_id'] . "<br/>";
        }
        if (!is_null($row['product_id'])) {
            echo "Produkt: ";
            echo "Nazwa: " . $row['name'] . "<br/>";
            echo "Cena: " . $row['price'] . "<br/>";
        }
    }
} else {
    echo "Błąd";
}

//  wszystkie produkty,
//  zamówienia, w których ten produkt się pojawił (pod spodem)
echo "<hr/> <b>wszystkie produkty</b>";

$sqlProduct = "SELECT * FROM product LEFT JOIN ProductOrder ON product.id=ProductOrder.product_id 
JOIN myOrder ON ProductOrder.order_id=myOrder.id 
ORDER BY product.id ASC";

$resultProduct = $conn->query($sqlProduct);

if ($resultProduct->num_rows > 0) {
    $lastProductId = 0;
    foreach ($resultProduct as $row) {
        if ($lastProductId != $row['product_id']) {
            $lastProductId = $row['product_id'];
            echo "<br/> Nazwa produktu: " . $row['name'] . "<br/>";
        }
        if (!is_null($row['order_id'])) {
            echo "Zamówienie o ID: " . $row['order_id'] . "<br/>";
        }
    }
} else {
    echo "Błąd";
}