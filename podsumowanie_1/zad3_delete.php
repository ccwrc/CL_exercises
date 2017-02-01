<?php
if (isset($_COOKIE['loggedUser'])) {
    setcookie('loggedUser', 'Jacek', time() - 100);
    echo"Ciasteczko loggedUser wykasowano <br/>";
} else {
    echo"Ciasteczko loggedUser nie istnieje <br/>";
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>

        <a href="zad3_show.php">Pokaż</a>
        <a href="zad3_delete.php">Skasuj</a>
        <a href="zad3_create.php">Stwórz</a>

    </body>
</html>