<?php
/* Połącz tabele Products i Orders relacją wiele do wielu. Napisz kilka zapytań, które połączą 
 * produkty z zamówieniami.

Napisz stronę, na której będą widoczne:

    wszystkie zamówienia,
    wszystkie produkty należące do zamówienia (pod spodem).

Napisz stronę, na której będą widoczne:

    wszystkie produkty,
    zamówienia, w których ten produkt się pojawił (pod spodem).  */

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