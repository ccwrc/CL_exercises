<?php

include 'src/menu.php';
include 'src/connection.php';

$conn = connectToCinemaDb();

$showTicketsSql = "SELECT Tickets.id AS ticket_id, Tickets.show_id AS ticket_show, "
        . "payment.payment_date AS payment_date FROM Tickets LEFT JOIN payment ON "
        . "Tickets.id=payment.ticket_id GROUP BY Tickets.id ORDER BY ticket_id DESC";
$showTicketsResult = $conn->query($showTicketsSql);

echo "<h3>bilety</h3>";

if ($showTicketsResult->num_rows > 0) {

    foreach ($showTicketsResult as $row) {
        echo "id biletu: " . $row['ticket_id'] . " Seans numer: ";
        echo $row['ticket_show'] . "<br/>";
        if ($row['payment_date'] == null) {
            echo "<b>Bilet nieopłacony</b> <br/><br/>";
        } else {
            echo "Bilet opłacony w dniu: " . $row['payment_date'] . "<br/><br/>";
        }
    }
} else {
    echo "Brak biletów";
}

$conn->close();
$conn = null;
