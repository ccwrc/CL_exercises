<?php
/* Stwórz tabelę do płatności. Ma mieć takie same dane jak w poprzednich zadaniach, ale z 
 * tabelą Bilety ma być powiązana relacją jeden do jednego (wpłynie to na kolumnę id). Relacja 
 * między biletem a płatnością jest następująca: bilet ma 1 lub 0 płatności (jest wtedy 
 * nieopłacony) – płatność musi być przypisana do biletu.

  Napisz stronę, na której można kupić bilet i wybrać sposób płatności (może go nie być). Następnie
 * napisz stronę, na której możemy pokazać wszystkie bilety opłacona za pomocą:

  karty,
  gotówki,
  przelewu,
  nieopłacone (czyli takie, które nie mają płatności w systemie). */

// tworzenie tabeli płatności
//    CREATE TABLE payment(
//    ticket_id int NOT NULL,
//    payment_date date,
//    payment_type varchar(155),
//    PRIMARY KEY(ticket_id),
//    FOREIGN KEY(ticket_id) REFERENCES Tickets(id)
//    ON DELETE CASCADE
//    );

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['ticket_quantity']) && is_numeric($_POST['ticket_quantity'])) {
        $serverName = "localhost";
        $userName = "root";
        $password = "coderslab";
        $database = "cinema_db";
        $conn = new mysqli($serverName, $userName, $password, $database);

        if ($conn->connect_errno) {
            die("Błąd połączenia z bazą $conn->connect_errno ");
        }

        $ticketQuantity = $_POST['ticket_quantity'];
        $paymentType = $_POST['payment_type'];
        $ticketPrice = 10;

        $insertToTicket = "INSERT INTO Tickets (quantity, price) "
                . "VALUES ($ticketQuantity, $ticketPrice)";

        $result = $conn->query($insertToTicket);

        if ($result) {
            echo "Bilet został dodany. ";
            if ($paymentType != '0') {
                $lastId = $conn->insert_id;
                $insertToPayment = "INSERT INTO payment (ticket_id, payment_type, payment_date) "
                        . "VALUES ($lastId, '$paymentType', NOW())";
                $result = $conn->query($insertToPayment);
                if ($result) {
                    echo "Płatność została dodana.";
                } else {
                    echo "Błąd płatności $conn->error";
                }
            }
        } else {
            echo "Błąd, spróbuj ponownie";
        }

        $conn->close();
        $conn = null;
    }
}
?>

<!DOCTYPE html>
<html>
    <body>    

        <form method="POST" action="">
            <h4>Cena za bilet wynosi 10zł.</h4> 
            <input type="text" name="ticket_quantity" placeholder="Podaj ilość biletów" /> <br>

            <label> Sposób płatności:
                <select name="payment_type">
                    <option value="0">brak</option>
                    <option value="credit_card">karta</option>
                    <option value="cash">gotówka</option>
                    <option value="transfer">przelew</option>
                </select> 
            </label> <br>
            <input type="submit" value="zamów" />
        </form>

    </body>
</html>