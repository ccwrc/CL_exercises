<?php
// zobaczyć wszystkie kina (na stronie kina wypisz wszystkie filmy + seanse w tym kinie)

include 'connection.php';
include 'functions.php';

$conn = connectToCinemaDb();

if ($conn->connect_error) {
    die('Błąd połączenia' . $conn->connect_error);
}
$setEncodingSql = "SET CHARSET utf8";
$conn->query($setEncodingSql);

$showCinemaSql = "SELECT * FROM Cinemas ORDER BY name ASC";
$showCinemasResult = $conn->query($showCinemaSql);

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