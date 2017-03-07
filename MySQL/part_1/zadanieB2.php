<?php
/* Napisz stronę, która wyświetli wszystkie produkty znajdujące się w bazie danych 
 * o nazwie exercises_db. */

$serverName = "localhost";
$userName = "root";
$password = "coderslab";
$database = "exercises_db";

$conn = new mysqli($serverName, $userName, $password, $database);

if ($conn->connect_error) {
    die("Nieudane połączenie. Błąd: " . $conn->connect_error . " Kod błędu: " . $conn->connect_errno);
}

$sql = "SELECT * FROM product ORDER BY name DESC";
$result = $conn->query($sql);

$conn->close();
$conn = null;
?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zadanie B2</title>
    </head> 
    <body>
        <h3>Lista twoich produktów:</h3>
        <?php
        foreach ($result as $row) {
            echo ("ID: " . $row['id'] . "<br>");
            echo ("Name: " . $row['name'] . "<br>");
            echo ("Description: " . $row['description'] . "<br>");
            echo ("Price: " . $row['price'] . "<br>");
            echo "<hr>";
        }
        ?>
    </body>
</html>