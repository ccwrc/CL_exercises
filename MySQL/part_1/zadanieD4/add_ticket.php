<?php
include 'index.php';
include 'connection.php';

$conn = connectToCinemasDb();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && is_numeric($_POST['ticket_price']) 
        && is_numeric($_POST['ticket_quantity'])) {

    $price = $conn->real_escape_string($_POST['ticket_price']);
    $quantity = $conn->real_escape_string($_POST['ticket_quantity']);

    $sql = "INSERT INTO `ticket` (`id`, `quantity`, `price`) VALUES (NULL, $quantity, $price)";
    $result = $conn->query($sql);

    if ($result) {
        echo "Bilet dodany";
    } else {
        echo "Błąd dodawania biletu";
    }
}

$conn->close();
$conn = null;
?>

<h3>dodaj bilet</h3>

<form method="POST" action="">
    <label> cena
        <input type="number" name="ticket_price"/>
    </label>
    <label> ilość
        <input type="number" name="ticket_quantity"/>
    </label>
    <input type="submit" value="zapisz"/>
</form>
