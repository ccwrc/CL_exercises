<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_cinema']) 
        && is_numeric($_POST['add_cinema']) && isset($_POST['add_movie']) 
        && is_numeric($_POST['add_movie'])) {

    $cinema = $_POST['add_cinema'];
    $movie = $_POST['add_movie'];

    $serverName = "localhost";
    $userName = "root";
    $password = "coderslab";
    $database = "cinema_db";
    $conn = new mysqli($serverName, $userName, $password, $database);

    if ($conn->connect_error) {
        die('Błąd połączenia' . $conn->connect_error);
    }

    $setEncodingSql = "SET CHARSET utf8";
    $conn->query($setEncodingSql);

    $newShowSql = "INSERT INTO show_cm (id, cinema_id, movie_id) VALUES (NULL, $cinema, $movie)";
    $result = $conn->query($newShowSql);

    if ($result) {
        echo "Utworzyłeś nowy seans o ID " . $conn->insert_id;
    }
} else {
    echo "Błąd - nieprawidłowe wartości";
}

$conn->close();
$conn = null;

