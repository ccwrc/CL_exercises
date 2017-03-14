<?php
include 'src/menu.php';
include 'src/connection.php';
include 'src/functions.php';

$conn = connectToCinemaDb();

$showCinemaSql = "SELECT * FROM Cinemas ORDER BY name ASC";
$showCinemasResult = $conn->query($showCinemaSql);

echo "<h3>wszystkie kina</h3>";

if($showCinemasResult->num_rows > 0) {
    
    foreach ($showCinemasResult as $row) {
        echo "Nazwa kina: " . $row['name'] . "<br/>";
        echo "Adres: " . $row['adress'] . "<br/>"; 
        showMoviesByCinemaId($row['id'], $conn);
        displayShowingByCinemaId($row['id'], $conn);
        echo "<br/>";
    }
} else {
    echo "Brak kin...";
}

$conn->close();
$conn = null;