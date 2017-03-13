<?php
include 'menu.php';
include 'connection.php';
include 'functions.php';

$conn = connectToCinemaDb();

if ($conn->connect_error) {
    die('Błąd połączenia' . $conn->connect_error);
}
$setEncodingSql = "SET CHARSET utf8";
$conn->query($setEncodingSql);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['movie_name'] != '' 
        && $_POST['movie_description'] != '' && is_numeric($_POST['movie_rating'])) {

    $movieName = $conn->real_escape_string($_POST['movie_name']);
    $movieDescription = $conn->real_escape_string($_POST['movie_description']);
    $movieRating = $conn->real_escape_string($_POST['movie_rating']);

    $sql = "INSERT INTO `Movies` (`id`, `name`, `rating`, `description`) VALUES "
            . "(NULL, '$movieName', $movieRating, '$movieDescription')";
    $result = $conn->query($sql);

    if ($result) {
        echo "Film dodany";
    } else {
        echo "Błąd dodawania filmu";
    }
}

$conn->close();
$conn = null;
?>

<h3>dodaj film</h3>

<form method="POST" action="">
    <input type="text" name="movie_name" placeholder="podaj tytuł filmu"/>
    <input type="text" name="movie_description" placeholder="opis"/>
    <label> Rating: 
        <input type="number" name="movie_rating"/>
    </label>
    <input type="submit" value="zapisz"/>
</form>
