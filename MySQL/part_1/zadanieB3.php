<?php
/* Napisz zapytania SQL, żeby wypełnić każdą tabelę w bazie danych o nazwie cinemas_db co najmniej
 *  kilkoma wpisami (dodaj je jako komentarz na górze pliku PHP).

  W pliku zadanieB3.php jest formularz służący do tworzenia nowych wpisów w tablicach.
 * Przeanalizuj kod HTML.
  Napisz kod PHP, który będzie wkładał przesyłane informacje do odpowiednich tabel w MySQL.
 * Zauważ, że możesz rozróżniać, który formularz został wysłany, dzięki temu że pola submit o 
 * nazwie submit mają różne wartości dla każdego formularza (hint: użyj switch).

  Jeżeli chcesz przeczytać o innych sposobach rozróżniania wielu formularzy na jednej stronie
 * zajrzyj:
  http://stackoverflow.com/questions/14071250/how-to-place-two-forms-on-the-same-page/14071321#14071321

  Przeprowadź też dodatkową walidację danych:

  Dla Filmu rating musi być w zakresie od 0.00 do 10.00.
  Dla Biletu cena musi być większa niż 0.
  Dla Płatności typ musi być jednym z podanych napisów:
  Karta,
  Gotówka,
  Przelew.
 */

/* przykladowe komendy sql do wypelniania tabel:
 * INSERT INTO cinema (name, address) VALUES ('nazwa', 'przykladowy adres');
 * INSERT INTO movie (name, description, rating) VALUES ('zakazanaplaneta', 'stare ale jare', 9);
 * INSERT INTO ticket (quantity, price) VALUES (3, 18);
 * INSERT INTO payment (payment_type, payment_date) VALUES ('transfer', '2016-12-10');
 */

$serverName = "localhost";
$userName = "root";
$password = "coderslab";
$database = "cinemas_db";
$conn = new mysqli($serverName, $userName, $password, $database);

// dodawanie kina do switcha
function addCinema($cinemaName, $cinemaAddress, &$message) {
    $serverName = "localhost";
    $userName = "root";
    $password = "coderslab";
    $database = "cinemas_db";
    $conn = new mysqli($serverName, $userName, $password, $database);

    if ($cinemaName == '') {
        $cinemaName = 'puste pole';
    }

    if ($cinemaAddress == '') {
        $cinemaAddress = 'puste pole';
    }

    if ($conn->connect_error) {
        die("Nieudane połączenie, błąd $conn->error, numer błędu $conn->errno ");
    }

    $sql = "INSERT INTO cinema (name, address) VALUES ('$cinemaName', '$cinemaAddress')";

    if ($conn->query($sql) === true) {
        $message = "Kino dodane.";
    } else {
        $message = "Kino nie dodane, błąd $conn->error ";
    }

    $conn->close();
    $conn = null;
}

// dodawanie filmu do switcha    
function addMovie($movieName, $movieDesc, $movieRating, &$message) {
    $serverName = "localhost";
    $userName = "root";
    $password = "coderslab";
    $database = "cinemas_db";
    $conn = new mysqli($serverName, $userName, $password, $database);

    if ($movieRating < 0 || $movieRating > 10) {
        $message = "Wprowadziłeś błędny rating";
        return $message;
    }

    if ($conn->connect_error) {
        die("Nieudane połączenie, błąd $conn->error, numer błędu $conn->errno ");
    }

    $sql = "INSERT INTO movie (name, description, rating) "
            . "VALUES ('$movieName', '$movieDesc', $movieRating)";

    if ($conn->query($sql) === true) {
        $message = "Film dodany.";
    } else {
        $message = "Film nie dodany, błąd $conn->error ";
    }

    $conn->close();
    $conn = null;
}

// doddawanie biletu do switcha    
function addTicket($ticketPrice, $ticketQuantity, &$message) {
    $serverName = "localhost";
    $userName = "root";
    $password = "coderslab";
    $database = "cinemas_db";
    $conn = new mysqli($serverName, $userName, $password, $database);

    if ($ticketPrice < 0) {
        $message = "Wprowadziłeś nieprawidłową cenę";
        return $message;
    }

    if ($conn->connect_error) {
        die("Nieudane połączenie, błąd $conn->error, numer błędu $conn->errno ");
    }

    $sql = "INSERT INTO ticket (quantity, price) "
            . "VALUES ($ticketQuantity, $ticketPrice)";

    if ($conn->query($sql) === true) {
        $message = "Bilet dodany.";
    } else {
        $message = "Bilet nie dodany, błąd $conn->error ";
    }

    $conn->close();
    $conn = null;
}

// dodawanie platnosci do switcha    
function addPayment($paymentType, $paymentDate, &$message) {
    $serverName = "localhost";
    $userName = "root";
    $password = "coderslab";
    $database = "cinemas_db";
    $conn = new mysqli($serverName, $userName, $password, $database);

    if ($conn->connect_error) {
        die("Nieudane połączenie, błąd $conn->error, numer błędu $conn->errno ");
    }

    $sql = "INSERT INTO payment (payment_type, payment_date) "
            . "VALUES ('$paymentType', '$paymentDate')";

    if ($conn->query($sql) === true) {
        $message = "Płatność dodana.";
    } else {
        $message = "Płatność nie dodana, błąd $conn->error ";
    }

    $conn->close();
    $conn = null;
}

$message = "Wypełnij pola:";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    switch ($_POST['submit']) {
        case 'cinema':
            addCinema($_POST['name'], $_POST['address'], $message);
            break;
        case 'movie':
            addMovie($_POST['name'], $_POST['desc'], $_POST['rating'], $message);
            break;
        case 'ticket':
            addTicket($_POST['price'], $_POST['quantity'], $message);
            break;
        case 'payment':
            if ($_POST['payment_type'] == 'transfer' ||
                    $_POST['payment_type'] == 'cash' ||
                    $_POST['payment_type'] == 'card') {
                $paymentType = $_POST['payment_type'];
                addPayment($paymentType, $_POST['payment_date'], $message);
            } else {
                $message = 'Wybrałeś zły typ płatności.';
            }
            break;
        default :
            $message = "Coś poszło nie tak.";
    }
}
?>

<div class="message"> <h3> <?= $message ?> </h3> </div>

<div>
    <form class="cinema_form" method="post" action="#">
        <label>Nazwa</label><br>
        <input name="name" type="text" maxlength="255" value=""/><br>
        <label>Adres</label><br>
        <input name="address" type="text" maxlength="255" value=""/><br>
        <button type="submit" name="submit" value="cinema">Wyślij</button>
    </form>
</div>

<div>
    <form class="movie_form" method="post" action="#">
        <label>Nazwa</label><br>
        <input name="name" type="text" maxlength="255" value=""/><br>
        <label>Opis</label><br>
        <input name="desc" type="text" maxlength="255" value=""/><br>
        <label>Rating</label><br>
        <input name="rating" type="number" min="0" max="10"/><br>
        <button type="submit" name="submit" value="movie">Wyślij</button>
    </form>
</div>

<div>
    <form class="ticket_form" method="post" action="#">
        <label>Ilosc</label><br>
        <input name="quantity" type="number" min="0"/><br>
        <label>Cena</label><br>
        <input name="price" type="number" min="0" step="0.01"/><br>
        <button type="submit" name="submit" value="ticket">Wyślij</button>
    </form>
</div>

<div>
    <form class="payment_form" method="post" action="#">
        <label>Typ platnosci</label><br>
        <select name="payment_type">
            <option value="transfer">Przelew</option>
            <option value="cash">Gotówka</option>
            <option value="card">Karta</option>
        </select><br>
        <label>Data</label><br>
        <input type="date" name="payment_date"><br>
        <button type="submit" name="submit" value="payment">Wyślij</button>
    </form>
</div>
