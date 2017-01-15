<?php

/* W tym zadaniu stwórz 2 strony:
    Na stronie wyświetl wszystkie ciasteczka do których masz dostęp. 
 * Jak wczytać wszystkie ciasteczka przeczytaj tutaj:
 * http://stackoverflow.com/questions/9577029/can-i-display-all-the-cookies-i-set-in-php
 *  Przy każdym z nich wygeneruj link do drugiej strony przekazując GET-em nazwę ciasteczka.
    Na drugiej stronie poinformuj o tym że usuwasz ciasteczko i je usuń. Nazwę ciasteczka 
 * pobierz z GET. */

for ($i = 1; $i < 15; $i++) {
    setcookie($i, $i++);
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zadanie 10</title>
    </head>
    <body>

        <h3> Wszystkie ciasteczka w systemie: </h3>
        
<?php
echo "<ol>";

foreach ($_COOKIE as $cookieName) {
    echo "<li> Ciasteczko $cookieName <a href = \"deleteCookie.php?cookieName=$cookieName\">L"
    . "ink do kasowania ciasteczka $cookieName</a></li><br/>";
}

echo "</ol>";
?>
        
    </body>
</html>