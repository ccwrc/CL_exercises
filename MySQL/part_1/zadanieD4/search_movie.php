<?php
include 'index.php';
include 'connection.php';

$conn = connectToCinemasDb();

if ($_SERVER['REQUEST_METHOD'] == 'POST' 
        && (isset($_POST['movie_name']) || isset($_POST['movie_rating']))) {

    if (isset($_POST['movie_name'])) {
            $movieName = $conn->real_escape_string($_POST['movie_name']);
    $sql = "SELECT * FROM movie WHERE name LIKE '%$movieName%'";
    }
    
        if (isset($_POST['movie_rating'])) {
            $movieRating = $conn->real_escape_string($_POST['movie_rating']);
    $sql = "SELECT * FROM movie WHERE rating = $movieRating";
    }

    $result = $conn->query($sql);

    foreach ($result as $row) {
        echo ("ID: " . $row['id'] . "<br/>");
        echo ("Nazwa: " . $row['name'] . "<br/>");
        echo ("Opis: " . $row['description'] . "<br/>");
        echo ("Rating: " . $row['rating'] . "<br/><br/>");
    }
}

$conn->close();
$conn = null;
?>

<h3>wyszukaj film po nazwie</h3>
<form method="POST" action="">
    <input type="text" name="movie_name" placeholder="podaj nazwę filmu"/>
    <input type="submit" value="szukaj"/>
</form>

<br/><br/>

<h3>wyszukaj film po ratingu</h3>
<form method="POST" action="">
    <label> rating: 
    <input type="number" name="movie_rating"/>
    </label>
    <input type="submit" value="szukaj"/>
</form>