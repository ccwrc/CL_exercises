<?php

/* Napisz stronę, która wczyta ze zmiennej superglobalnej dwie zmienne $start i $end 
 * (dla uproszczenia załóźmy że będziemy przesyłać tylko liczby całkowite). Następnie 
 * wypisze wszaystkie liczby od $start do $end. Jeżeli zmienne nie są przesłane to wypisz 
 * odpowiednią informację na ten temat. Następnie na drugiej stronie stwórz kilka linków 
 * w html do pierwszej strony przesyłając informację za pomocą GET. */

if ($_SERVER['REQUEST_METHOD'] != 'GET' || !isset($_GET['start']) ||
        trim($_GET['start']) == '' || !isset($_GET['end']) ||
        trim($_GET['end']) == '') {
    echo "<b> brak wymaganych zmiennych </b>";
    exit;
}

$start = trim($_GET['start']);
$end = trim($_GET['end']);

function generateListFromStartToEnd($start, $end) {
    print "<ul>";
    for ($i = $start; $i <= $end; $i++) {
        print "<li>$i</li><br/>";
    }
    print "</ul>";
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zadanie A1</title>
    </head>
    <body>

<?php
generateListFromStartToEnd($start, $end);
?>

        <hr/>
        <a href="index.php">Powrót do poprzedniej strony</a>
        <hr/>

    </body>
</html>