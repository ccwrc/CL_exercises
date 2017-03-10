<?php
/* Połącz tabele Seanse i Bilety za pomocą relacji wiele do jednego (na seans może być sprzedanych 
 * wiele biletów, jeden bilet może być tylko na jeden seans).

Napisz stronę, na której możemy kupić bilet na wybrany seans. Seanse mają być wybierane z listy 
 * drop-down (użyj do tego tagu <select>). W tym celu wczytaj z bazy danych wszystkie dostępne 
 * seanse i pętlą for wygeneruj option do formularza.
Napisz stronę, na której wyświetlamy dane z biletu (ID seansu, nazwa filmu, nazwa kina, cena 
 * biletu).  */

// tworzenie tabeli pokaz
//    CREATE TABLE showing(
//    id int NOT NULL AUTO_INCREMENT,
//    name text,
//    PRIMARY KEY(id)
//    );

// tworzenie relacji
// ALTER TABLE Tickets ADD showing_id int;
//    ALTER TABLE Tickets ADD
//    FOREIGN KEY(showing_id) REFERENCES showing(id);

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

$sql = "SELECT * FROM showing";
$result = $conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['buy_ticket']) && is_numeric($_POST['buy_ticket'])) {
    $showingId = $_POST['buy_ticket'];

    $sql = "INSERT INTO Tickets (quantity, price, showing_id) VALUES (1, 10, $showingId)";
    $result = $conn->query($sql);
    if ($result) {
        echo "Kupiłeś jeden bilet za 10zł";
    } else {
        echo "Coś poszło nie tak spróbuj ponownie.";
    }
}

$conn->close();
$conn = null;
?>

<h3>Kup bilet</h3>
<form method="POST" action="">
    <select name="buy_ticket">
<?php
foreach ($result as $row) {
    echo "<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
}
?>
        <input type="submit" value="kup">
    </select>
</form>

<hr/>

<h3>Dane biletu</h3>