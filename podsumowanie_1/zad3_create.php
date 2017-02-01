<?php

/* W pliku zad3_create.php napisz kod, który stworzy ciasteczko o nazwie loggedUser 
 * (tylko gdy ono nie istnieje) i włoży do niego napis "Jacek". Ciasteczko ma żyć przez 
 * następne dwa dni.

W pliku zad3_delete.php napisz kod, który usunie ciasteczko o nazwie loggedUser 
 * (tylko gdy ono istnieje).

W pliku zad3_show.php napisz kod, który wyświetli zawartość ciasteczka o nazwie loggedUser. 
 * Jeżeli ciasteczko nie istnieje, to powinien wyświetlić komunikat "Ciasteczko loggedUser 
 * nie istnieje". */

if (!isset($_COOKIE['loggedUser'])) {
    setcookie('loggedUser', 'Jacek', time() + (3600 * 48));
    echo "Ciasteczko loggedUser utworzone <br/>";
} else {
    echo "Ciasteczko loggedUser istnieje <br/>";
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
