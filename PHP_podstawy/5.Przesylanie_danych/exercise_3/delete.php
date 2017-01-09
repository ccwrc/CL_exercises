<?php

session_start();
unset($_SESSION['counter']);

?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zadanie 3</title>
    </head>
    <body>

        <h1> Sesja wyzerowana </h1>
        <a href="index.php">Ustaw</a> 
        <a href="display.php">Pokaż</a> 
        <a href="delete.php">Skasuj</a> 

    </body>
</html>


