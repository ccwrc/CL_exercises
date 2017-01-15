<?php

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $message = $_GET['cookieName'];
    setcookie($_GET['cookieName'], '', time() - 200);
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zadanie 10</title>
    </head>
    <body>
        
        <h3> Ciasteczko o nazwie <?= $message ?> zostało usunięte </h3>
        <a href="index.php">Powrót do poprzedniej strony</a>
        
    </body>
</html>