<?php

/* W tym zadaniu stwórz 3 strony:

    Pierwsza strona ma nastawiać ciasteczko o nazwie User na twoje imię,
    Druga strona ma wyświetlać zawartość ciasteczka User. Jeżeli nie ma takiego 
    ciasteczka to powinna wyświetlić odpowiednie informacje.
    Trzecia strona powinna kasować ciasteczko o nazwie User. */

$message = "Brak ciacha z userem";

if (isset($_COOKIE['User'])) {
    $message = "Użytkownik = " . $_COOKIE['User'];
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zadanie 4</title>
    </head>
    <body>

        <h3> Zawartość ciasteczka to: <?= $message ?> </h3>
        <a href="index.php">Ustaw</a> 
        <a href="display.php">Pokaż</a> 
        <a href="delete.php">Skasuj</a> 

    </body>
</html>