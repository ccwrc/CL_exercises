<?php
session_start();

include 'src/menu.php';
include 'src/connection.php';

$message = "";
$conn = connectToCinemaDb();
$date = date('Y-m-d');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['show_id'] != '' && is_numeric($_POST['show_id'])) {

    $showId = $_POST['show_id'];   

    $sql = "INSERT INTO `Tickets` (`id`, `quantity`, `price`, `show_id`) "
            . "VALUES (NULL, 1, 10, $showId)";   
    $result = $conn->query($sql);    
    if ($result) {
        $message = "Bilet zakupiony, wybierz płatność: ";
        $_SESSION['ticket_id'] = $conn->insert_id;
    } else {
        $message = "Błąd zakupu, wróć do poprzedniej strony";
    }
    $_POST['show_id'] = null;
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_SESSION['ticket_id']) 
        && ($_GET['payment_type'] == 'transfer' || $_GET['payment_type'] == 'cash' 
        || $_GET['payment_type'] == 'credit_card')) {
    
    $ticketId = $_SESSION['ticket_id'];
    unset($_SESSION['ticket_id']);
    $paymentType = $_GET['payment_type'];

    $sql = "INSERT INTO `payment` (`ticket_id`, `payment_date`, `payment_type`) "
            . "VALUES ($ticketId, '$date', '$paymentType')";
    $result = $conn->query($sql);

    if ($result) {
        $message = "Bilet opłacony, zapraszamy na seans";
    } else {
        $message = "Błąd płatności, wróć do poprzedniej strony";
    }
}

$conn->close();
$conn = null;
?>

<h3><?= $message ?></h3>
<form method="GET" action="">
    <select name="payment_type">
        <option>rodzaje płatności: </option>
        <option value="transfer">przelew</option>
        <option value="cash">gotówka</option>
        <option value="credit_card">karta kredytowa</option>
        <input type="submit" value="Zapłać">
    </select>
</form>
