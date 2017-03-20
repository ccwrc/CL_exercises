<?php
include 'index.php';
include 'connection.php';

$conn = connectToCinemasDb();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cinema_name'])) {

    $cinemaName = $conn->real_escape_string($_POST['cinema_name']);

    $sql = "SELECT * FROM cinema WHERE name LIKE '%$cinemaName%'";
    $result = $conn->query($sql);

    foreach ($result as $row) {
        echo ("ID: " . $row['id'] . "<br>");
        echo ("Nazwa: " . $row['name'] . "<br>");
        echo ("Adres: " . $row['address'] . "<br>");
    }
}

$conn->close();
$conn = null;
?>

<h3>wyszukaj kino</h3>
<form method="POST" action="">
    <input type="text" name="cinema_name" placeholder="podaj nazwę kina"/>
    <input type="submit" value="szukaj"/>
</form>