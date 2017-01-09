<?php

/* Na stronie napisz formularz, który będzie przyjmował imię i nazwisko. 
 * Formularz ten ma przekierowywać do tej samej strony metodą POST. 
 * Jeżeli strona została uruchomiona przez zapytanie POST (musicie sprawdzić 
 * to w superglobalnej zmiennej $_SERVER['REQUEST_METHOD']) to ponad formularzem 
 * ma się wyświetlić napis "Witaj "  */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Witaj " . $_POST['nameSurname'];
} 

?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zadanie 2</title>
    </head>
    <body>

        <form action="" method="POST">
            <input type="text" name="nameSurname" placeholder="Podaj imię i nazwisko"/>
            <input type="submit" value="Kliknij"/>
        </form>

    </body>
</html>

