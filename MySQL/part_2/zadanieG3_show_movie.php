<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cinema_list_id']) 
        && is_numeric($_POST['cinema_list_id'])) {

    $cinemaId = $_POST['cinema_list_id'];

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

    $showMovieSql = "SELECT Movies.name as movie_name FROM Movies JOIN show_cm ON "
            . "Movies.id=show_cm.movie_id LEFT JOIN Cinemas ON Cinemas.id=show_cm.cinema_id "
            . "WHERE Cinemas.id=$cinemaId GROUP BY movie_name ORDER BY movie_name ASC";
    $result = $conn->query($showMovieSql);

    if ($result) {
        echo "<b> Lista filmów: </b><br/>";
        foreach ($result as $row) {
            echo $row['movie_name'] . "<br/>";
        }
    }
} else {
    echo "Błąd - nieprawidłowe wartości";
}

$conn->close();
$conn = null;
