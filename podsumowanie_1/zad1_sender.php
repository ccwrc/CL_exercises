<?php
$dataToSend = [
    "name" => "Jacek",
    "mail" => "jacek@somemail.com",
    "id" => 34
];
// bez php -> zwykły link z danymi przypisanymi bezpośrednio
?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zadanie 1</title>
    </head>
    <body>

        <a href="zad1_receiver.php?name=<?= $dataToSend['name'] ?>&mail=<?= $dataToSend['mail'] ?>&id=<?= $dataToSend['id'] ?>">Prześlij dane GET</a>    

    </body>
</html>
