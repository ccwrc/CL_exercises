<?php
/* Napisz stronę, która usunie produkt o podanym id (id powinno być przekazane do strony 
 * za pomocą metody GET). Strona powinna wyświetać informacje o usunięciu produktu. */

if (isset($_GET['product_id']) && is_numeric($_GET['product_id'])) {

    $serverName = "localhost";
    $userName = "root";
    $password = "coderslab";
    $database = "exercises_db";

    $conn = new mysqli($serverName, $userName, $password, $database);

    if ($conn->connect_error) {
        die("Błąd połączenia, $conn->connect_error");
    }

    $productId = $_GET['product_id'];
    $sql = "SELECT * FROM product WHERE id = $productId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $sql = "DELETE FROM product WHERE id = $productId";
        $result = $conn->query($sql);
        if ($result) {
            echo "Produkt o ID $productId wykasowany.";
        } else {
            echo "Produkt nie został wykasowany, błąd $conn->error";
        }
    } else {
        echo "Produkt nie został znaleziony";
    }

    $conn->close();
    $conn = null;
}
?>

<!DOCTYPE html>
<html>
    <body>    
        <form method="GET" action="">
            <input type="text" id="product_id" name="product_id" placeholder="Tu wprowadź ID produktu"/>
            <input type="submit" value="Kliknij żeby skasować"/>
        </form>
    </body>
</html>