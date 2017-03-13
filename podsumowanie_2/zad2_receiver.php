<?php
require_once dirname(__FILE__).'/config.php';
/* W pliku zad2_receiver.php napisz kod PHP, który wypisze na stronie wszystkie wiadomości dla 
 * użytkownika o id przekazanym przez GET (zmienna o nazwie userId). Strona powinna spełniać 
 * nastepujące wymogi:

    Wiadomości powinny zostać wyświetlone w formacie <id wiadomości>, <treść waidomości> po jednej 
 * wiadomości w linii.
    W przypadku w którym użytkownik nie posiada żadnej wiadomości w systemie na stronie powinien 
 * pojawić się komunikat Brak wiadomości dla danego użytkownika
    W pzypadku wejścia na stronę inną metodą niż GET na stronie powinien wyświetlić się komunikat 
 * Proszę wejść na stronę metodą GET.
    W przypadku wejścia na stronę i nie przesłania id strona powinna wyświetlić komunikat 
 * Brak przesłania wymaganych danych GET.

W pliku zad2_sender.html znajduje się kilka linków które pomogą Ci przetestować twój kod. */

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['userId']) && is_numeric($_GET['userId'])) {

    $userId = $_GET['userId'];
    $sql = "SELECT * FROM Users JOIN Messages ON Users.id=Messages.user_id WHERE "
            . "Messages.message IS NOT NULL AND Users.id = $userId";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        foreach ($result as $row) {
            echo $row['id'] . " " . $row['message'] . "<br/>";
        }
    } else {
        echo "Brak wiadomości dla danego użytkownika";
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo "Brak przesłania wymaganych danych GET";
} else {
    echo "Proszę wejść na stronę metodą GET";
}