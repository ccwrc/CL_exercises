<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zadanie 9</title>
    </head>
    <body>
        <h3> Wszystkie ciasteczka w systemie: </h3>
        <?php 
        print "<ol>";

        foreach ($_COOKIE as $cookieName => $cookieValue) {
            print "<li>Nazwa: $cookieName Zawartość: $cookieValue</li>";
        }

        print "</ol>";
        ?>

        <a href="index.php">Powrót do: ustaw ciacho</a>

    </body>
</html>
