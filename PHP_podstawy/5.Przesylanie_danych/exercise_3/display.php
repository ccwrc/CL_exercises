<?php

session_start();
$message = '';

if (isset($_SESSION['counter'])) {
    $_SESSION['counter'] ++;
    $message = $_SESSION['counter'];
} else {
    $message = 'Brak zmiennej counter w sesji';
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zadanie 3</title>
    </head>
    <body>

        <h1> Wartość wczytana z sesji to: <?= $message ?> </h1>
        <a href="index.php">Ustaw</a> 
        <a href="display.php">Pokaż</a> 
        <a href="delete.php">Skasuj</a> 

    </body>
</html>

