<?php

/* Stwórz stronę select_language.php na której znajduje się formularz z elementem oraz dwoma 
 * opcjami wyboru - język Polski i język Angielski. Strona ma przesyłać dane za pomocą POST 
 * do strony set_language.php która ma nastawić ciasteczko language na wartość wybraną przez 
 * użytkownika. Po ponownym wejściu na stronę select_language.php powinna być wyświetlana 
 * informacja o wybranym przez użytkownika języku.  */

$message = '';

if (isset($_COOKIE['language'])) {
    $message = "Ciasteczko wczytane, język ustawiony na: " . $_COOKIE['language'];
} else {
    $message = "Ciasteczko nie jest ustawione";
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zadanie 12</title>
    </head>
    <body>

        <form action="set_language.php" method="POST">

            <select name="language">
                <option value="angielski">Angielski</option>
                <option value="polski">Polski</option>
            </select>

            <input type="submit" value="Zapisz">

        </form>

        <h3> <?= $message ?> </h3>

    </body>
</html>
