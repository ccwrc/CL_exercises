<?php
session_start();

if (!isset($_SESSION['someData'])) {
    echo "Sesja nie posiada wartości pod kluczem someData";
} else {
    echo "Kasuję " . $_SESSION['someData'];
    unset($_SESSION['someData']);
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zadanie 4</title>
    </head>
    <body>

        <br/>
        <a href="zad4_show.php">Pokaż</a> | 
        <a href="zad4_create.php">Ustaw</a> | 
        <a href="zad4_delete.php">Kasuj</a>

    </body>
</html>