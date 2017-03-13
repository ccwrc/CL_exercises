<?php
$exercise_1a = "CREATE TABLE Destinations(
id int AUTO_INCREMENT,
user_id int NOT NULL,
address text,
lat decimal(13,10),
my_long decimal(13,10),
PRIMARY KEY(id),
FOREIGN KEY(user_id) REFERENCES Users(id)
)";

$exercise_1b = "CREATE TABLE items_orders(
id int AUTO_INCREMENT,
item_id int NOT NULL,
order_id int NOT NULL,
PRIMARY KEY(id),
FOREIGN KEY(item_id) REFERENCES Items(id),
FOREIGN KEY(order_id) REFERENCES Orders(id)
)";

$exercise_1c = "INSERT INTO items_orders (order_id, item_id) VALUES (6, 2)";

$exercise_1d = "SELECT * FROM Items WHERE price > 50";

$exercise_1e = "INSERT INTO Orders (description) VALUES ('Przykładowy opis 1')";

$exercise_1f = "DELETE FROM Users WHERE id = 7";

$exercise_1g = "SELECT * FROM Users JOIN Messages ON Users.id=Messages.user_id WHERE "
        . "Messages.message IS NOT NULL";
