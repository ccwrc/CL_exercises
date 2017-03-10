<?php

function createDbConnection() {
    $serverName = "localhost";
    $userName = "root";
    $password = "coderslab";
    $database = "cinema_db";
    return new mysqli($serverName, $userName, $password, $database);
}

$conn = createDbConnection();

if ($conn->connect_error) {
    die("Nieudane połączenie, błąd $conn->error, numer błędu $conn->errno ");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ticket_id']) && is_numeric($_POST['ticket_id'])) {
    $ticketId = $_POST['ticket_id'];

    $sql = "SELECT * FROM Tickets LEFT JOIN payment ON Tickets.id=payment.ticket_id "
            . "LEFT JOIN showing ON showing.id=Tickets.showing_id WHERE "
            . "Tickets.id=$ticketId LIMIT 1;";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        foreach ($result as $row) {
            echo "ID: " . $row['id'] . "<br/>";
            echo "ilość: " . $row['quantity'] . "<br/>";
            echo "cena: " . $row['price'] . "<br/>";
            echo "seans: " . $row['name'] . "<br/>";
            echo "data płatności: " . $row['payment_date'] . "<br/>";
            echo "typ płatności: " . $row['payment_type'] . "<br/>";
        }
    } else {
        echo "Coś poszło nie tak spróbuj ponownie.";
    }
}

$conn->close();
$conn = null;
?>

