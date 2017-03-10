<?php
/* Połącz tabele Seanse i Bilety za pomocą relacji wiele do jednego (na seans może być sprzedanych 
 * wiele biletów, jeden bilet może być tylko na jeden seans).

Napisz stronę, na której możemy kupić bilet na wybrany seans. Seanse mają być wybierane z listy 
 * drop-down (użyj do tego tagu <select>). W tym celu wczytaj z bazy danych wszystkie dostępne 
 * seanse i pętlą for wygeneruj option do formularza.
Napisz stronę, na której wyświetlamy dane z biletu (ID seansu, nazwa filmu, nazwa kina, cena 
 * biletu).  */

// tworzenie tabeli pokaz
//    CREATE TABLE showing(
//    id int NOT NULL AUTO_INCREMENT,
//    name text,
//    PRIMARY KEY(id)
//    );

// tworzenie relacji
// ALTER TABLE Tickets ADD showing_id int;
//    ALTER TABLE Tickets ADD
//    FOREIGN KEY(showing_id) REFERENCES showing(id);