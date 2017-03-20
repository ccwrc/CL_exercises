<?php
include 'index.php';
include 'connection.php';

$conn = connectToCinemasDb();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['cinema_name'] != '' 
        && $_POST['cinema_address'] != '') {
    $cinemaName = $conn->real_escape_string($_POST['cinema_name']);
    $cinemaAddress = $conn->real_escape_string($_POST['cinema_address']);

    $sql = "INSERT INTO `cinema` (`id`, `name`, `address`) VALUES "
            . "(NULL, '$cinemaName', '$cinemaAddress')";
    $result = $conn->query($sql);
    if ($result) {
        echo "Kino dodane";
    } else {
        echo "błąd dodawania kina";
    }
}

$conn->close();
$conn = null;
?>

<h3>dodaj kino</h3>

<form method="POST" action="">
    <input type="text" name="cinema_name" placeholder="podaj nazwę kina"/>
    <input type="text" name="cinema_address" placeholder="podaj adres kina"/>
    <input type="submit" value="zapisz"/>
</form>