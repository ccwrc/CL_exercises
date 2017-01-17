<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['language'] == "angielski") {
        setcookie('language', $_POST['language']);
    } else {
        setcookie('language', $_POST['language']);
    }
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 12</title>
</head>
<body>
    
    <h3>Język został nastawiony </h3>
    <a href="select_language.php"> Powrót do poprzedniej strony </a>
    
</body>
</html>