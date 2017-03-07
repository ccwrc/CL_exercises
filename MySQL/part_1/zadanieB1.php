<?php
/* Napisz zapytania SQL, żeby wypełnić każdą tabelę w bazie danych o nazwie exercises_db co 
  najmniej kilkoma wpisami. Napisz formularz, który będzie dodawał nowe produkty do bazy danych. */

// formularz i obsługa formularza
$message = 'Pola oznaczone * są obowiązkowe.';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['product_name'];
    $description = $_POST['product_description'] != '' ? $_POST['product_description'] : null;
    $price = $_POST['product_price'];

    if (!empty($name) && !empty($price)) {
        if (is_numeric($price)) {
            addProduct($name, $price, $description, $message);
        } else {
            $message = "Błąd. Cena powinna być liczbą.";
        }
    } else {
        $message = "Nie podałeś nazwy lub ceny.";
    }
}

// referencja odpowiada za poprawne wyswietlanie komunikatu w divie message
function addProduct($name, $price, $description, &$message) {
    $serverName = "localhost";
    $userName = "root";
    $password = "coderslab";
    $database = "exercises_db";

    $conn = new mysqli($serverName, $userName, $password, $database);

    if ($conn->connect_error) {
        die("Nieudane połączenie, błąd $conn->error, numer błędu $conn->errno ");
    }
    // liczby w zapytaniu sql bez ciapek
    $sql = "INSERT INTO product (name, description, price) VALUES ('$name', '$description', $price)";

    if ($conn->query($sql) === true) {
        $message = "Produkt został dodany";
    } else {
        $message = "Produkt nie został dodany błąd $conn->error ";
    }

    // dodatkowe zapytania (ew. moza uzyc for do masowego wypelnienia tabel)
    $sql = "INSERT INTO client (name, surname) VALUES ('Jan', 'Kovalski')";

    if ($conn->query($sql) === true) {
        echo "Klient dodany";
    } else {
        echo "Produkt nie został dodany, błąd $conn->error ";
    }

    $sql = "INSERT INTO myOrder (description) VALUES ('zwykły opis')";

    if ($conn->query($sql) === true) {
        echo "Zamówienie dodane";
    } else {
        echo "Zamówienie nie dodane, błąd $conn->error ";
    }

    $conn->close();
    $conn = null;
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zadanie B1</title>
    </head>    
    <body> 
        
        <div class='message'> 
            <?= $message ?>  
        </div>    

        <div class='container'>
            <form method='POST' action="">
                <input type="text" name="product_name" id="product_name" placeholder="Nazwa produktu *"> <br/>
                <textarea name="product_description" id="product_description" placeholder="Opis produktu" cols="40" rows="5"></textarea> <br/>
                <input type="text" name="product_price" id="product_price" placeholder="Cena produktu *"> <br/>
                <input type="submit" value="Kliknij żeby dodać produkt">
            </form>
        </div>   

    </body>
</html>