<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['movie_list_id']) 
        && is_numeric($_POST['movie_list_id'])) {

    $movieId = $_POST['movie_list_id'];

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

    $showCinemaSql = "SELECT Cinemas.name as cinema_name FROM Cinemas JOIN show_cm ON "
            . "Cinemas.id=show_cm.cinema_id LEFT JOIN Movies ON Movies.id=show_cm.movie_id "
            . "WHERE Movies.id=$movieId GROUP BY cinema_name ORDER BY cinema_name ASC";
    $result = $conn->query($showCinemaSql);

    if ($result) {
        echo "<b> Lista kin: </b><br/>";
        foreach ($result as $row) {
            echo $row['cinema_name'] . "<br/>";
        }
    }
} else {
    echo "Błąd - nieprawidłowe wartości";
}

$conn->close();
$conn = null;
