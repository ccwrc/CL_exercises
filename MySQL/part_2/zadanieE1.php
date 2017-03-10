<?php
/* Stwórz nową tabelę UserAddress zawierającą:

    city: string
    street: string
    house_nr: string

Tabela UserAddress ma być połączona relacją jeden do jednego z tabelą Users. Napisz kilka 
 * zapytań SQL, które wprowadzą adresy dla istniejących już użytkowników. */


// tworzenie tabeli users
// CREATE TABLE users (user_id int NOT NULL AUTO_INCREMENT, user_name varchar(255),PRIMARY KEY 
// (user_id));
// wypelnianie tabeli
// INSERT INTO `users` (`user_id`, `user_name`) VALUES (NULL, 'Jan');


// tabela UserAddress - tworzenie
//    CREATE TABLE UserAddress(
//    id int NOT NULL AUTO_INCREMENT,
//    city varchar(255),
//    street text,
//    house_nr varchar(255),
//    user_id int NOT NULL,
//    PRIMARY KEY(id),
//    FOREIGN KEY(user_id) REFERENCES users(user_id)
//    );
//      opcja: ON DELETE CASCADE
// wypelnianie tabeli
//    INSERT INTO `UserAddress` (`id`, `city`, `street`, `house_nr`, `user_id`) 
//    VALUES (NULL, 'Warka', 'Podwójna', '2', '1');