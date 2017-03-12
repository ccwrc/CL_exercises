<?php
/* Stwórz aplikację, na której można:

zobaczyć wszystkie filmy (w stronie filmu zobaczyć opis, rating + listę kin, która go wyświetla),
zobaczyć wszystkie kina (na stronie kina wypisz wszystkie filmy + seanse w tym kinie),
kupić bilet na dany seans,
zapłacić za bilet.

Stwórz panel administracyjny dla sieci kin. Powinna w nim być możliwość dodawania kin, 
 * filmów, seansów, zarządzania biletami (sprawdzanie płatności itp). */

include 'connection.php';

$conn = connectToCinemaDb();
?>

<a href="show_movies.php">Filmy</a> | 
<a href="show_cinemas.php">Kina</a> | 
<a href="ticket_buy.php">Kup bilet</a> | 
<a href="admin_panel.php.php">Panel administracyjny</a> 
 
