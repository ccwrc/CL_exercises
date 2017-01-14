<?php

/* W tym zadaniu stwórz 2 strony:
    Na pierwszej powinien znajdować się formularz z dwoma polami tekstowymi. Pierwsze pole będzie 
 * przybierało nazwe ciasteczka, a drugie jego wartość. Formularz ma przekierowywać do tej samej 
 * strony metodą POST. Jeżeli na tą stronę wejdziemy metodą POST to ma ono tworzyć nowe ciasteczko 
 * o podanej nazwie i wartości.
 * 
    Na drugiej stronie wyświetl wszystkie ciasteczka do których masz dostęp. Jak wczytać wszystkie
 *  ciasteczka przeczytaj np.
  http://stackoverflow.com/questions/9577029/can-i-display-all-the-cookies-i-set-in-php
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    @setcookie($_POST['cookieName'], $_POST['cookieValue']);
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zadanie 9</title>
    </head>
    <body>

        <form action="#" method="POST">

            <label>
                Nazwa ciasteczka:
                <input type="text" name="cookieName">
            </label>

            <label>
                Wartość ciasteczka:
                <input type="text" name="cookieValue">
            </label>

            <input type="submit" value="Dopraw ciacho">
        </form>

        <a href="showAllCookies.php">Pokaż zawartość ciastka</a>

    </body>
</html>

