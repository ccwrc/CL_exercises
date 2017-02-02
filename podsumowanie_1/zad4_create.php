<?php
/* W pliku zad4_set.php napisz kod, który wstawi do sesji pod klucz someData wartość some text.

  W pliku zad4_delete.php napisz kod, który usunie z sesji zawartość znajdującą się pod kluczem
 * someData.

  W pliku zad4_show.php napisz kod, który wyświetli z sesji wartość znajdującą się pod kluczem
 * someData. */

session_start();
$_SESSION['someData'] = "some text";
echo "Ustawiam sesję";
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