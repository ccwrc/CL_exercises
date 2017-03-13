
<form action="#" method="POST">
    <label>Nazwa:
        <input type="text" name="name">
    </label>
    <label>Cena:
        <input type="number" name="price">
    </label>
    <label>Opis:
        <input type="text" name="description">
    </label>
    <input type="submit" value="wyślij">
</form>
<br>

<?php
require_once dirname(__FILE__).'/config.php';
/* W pliku zad3.php jest formularz służący do dodania nowego przedmiotu do bazy danych. 
 * Przeanalizuj go. Następnie w tym samym pliku napisz kod, który:

    W przypadku wejścia na tę stronę metodą POST pobierze informacje przesłane jako: name, 
 * description, price. Jeżeli nie zostaną przesłane wszystkie dane to strona powinna wyświetlić 
 * komunikat Brak przesłania wymaganych danych POST.
    Wpisze te dane do bazy danych do tabeli Items. Po dodaniu przedmiotu powinien wyświetlić 
 * komunikat: Do bazy danych został dodany nowy przedmiot o id <id dodanego przedmiotu>.

Pamiętaj o poprawnym połączeniu do bazy danych i jego zamknięciu. */

if ($_SERVER['REQUEST_METHOD'] == 'POST' && ($_POST['name'] != '') 
        && ($_POST['price'] != '') && ($_POST['description'] != '')) {
    
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "INSERT INTO `Items` (`id`, `name`, `description`, `price`) VALUES "
            . "(NULL, '$name', '$description', $price)";
    $result = $conn->query($sql);
    if ($result) {
        echo "Do bazy danych został dodany nowy przedmiot o id " . $conn->insert_id;
    }
} else {
    echo "Brak przesłania wymaganych danych POST";
}

$conn->close();
$conn = null;

