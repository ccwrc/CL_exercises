<?php
// zobaczyć wszystkie filmy (w stronie zobaczyć opis, rating + listę kin, która go wyświetla)

include 'connection.php';
include 'functions.php';

$conn = connectToCinemaDb();

if ($conn->connect_error) {
    die('Błąd połączenia' . $conn->connect_error);
}
$setEncodingSql = "SET CHARSET utf8";
$conn->query($setEncodingSql);

$showMoviesSql = "SELECT * FROM Movies ORDER BY name ASC";
$showMoviesResult = $conn->query($showMoviesSql);

if ($showMoviesResult->num_rows > 0) {

    foreach ($showMoviesResult as $row) {
        echo "Tytuł: " . $row['name'] . "<br/>";
        echo "Opis: " . $row['description'] . "<br/>";
        echo "Rating: " . $row['rating'] . "<br/>";
        showCinemasBymovieId($row['id'], $conn);
        echo "<br/>";
    }
} else {
    echo "Brak filmów...";
}

$conn->close();
$conn = null;