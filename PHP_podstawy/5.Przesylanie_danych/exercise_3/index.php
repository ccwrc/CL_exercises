<?php

/* W zadaniu stwórz 3 strony. Strony mają mieć nastepującą funkcjonalność:

    Pierwsza strona ma nastawiać informacje w sesji pod kluczem counter na 0,
    Druga strona ma wyświetlać zawartość sesji pod kluczem counter i zwiększać ją o 1. 
 * Jeżeli nie ma takich danych w sesji to powinna wyświetlić odpowiednie informacje.
    Trzecia strona powinna kasować dane z sesji (tylko te trzymane pod kluczem counter). */

session_start();
$_SESSION['counter'] = 0;

?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zadanie 3</title>
    </head>
    <body>

        <h1> Sesja nastawiona na początkową wartość </h1>
        <a href="index.php">Ustaw</a> 
        <a href="display.php">Pokaż</a> 
        <a href="delete.php">Skasuj</a> 

    </body>
</html>
