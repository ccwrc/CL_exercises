<?php
include 'menu.php';
include 'connection.php';
include 'functions.php';

$conn = connectToCinemaDb();

$showMoviesSql = "SELECT * FROM Movies ORDER BY name ASC";
$showMoviesResult = $conn->query($showMoviesSql);

echo "<h3>wszystkie filmy</h3>";

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