<?php
include 'index.php';
include 'connection.php';

$conn = connectToCinemasDb();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['payment_type'])) {

    $paymentType = $conn->real_escape_string($_POST['payment_type']);

    $sql = "INSERT INTO `payment` (`id`, `payment_type`, `payment_date`) "
            . "VALUES (NULL, '$paymentType', now())";
    $result = $conn->query($sql);

    if ($result) {
        echo "Płatność dodana";
    } else {
        echo "Błąd dodawania płatności";
    }
}

$conn->close();
$conn = null;
?>

<h3>dodaj płatność</h3>
<form method="POST" action="">
    <select name="payment_type">
        <option>rodzaje płatności: </option>
        <option value="transfer">przelew</option>
        <option value="cash">gotówka</option>
        <option value="card">karta</option>
        <input type="submit" value="Zapłać">
    </select>
</form>
