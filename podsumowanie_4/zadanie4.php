<?php
/* Zadanie 4
  Napisz formularz, który będzie pobierał od użytkownika jakiś napis. Następnie użytkownik
 * będzie miał możliwość wybrania jednej z opcji:

  1.Opcja jeden usuwa z napisu wszystkie znaki poza literami, cyframi i spacją, a wynik
 * wypisze na stronie.
  2.Opcja dwa usuwa z napisu wszystkie znaki poza cyframi, przecinkami, kropkami i spacją,
 * a wynik wypisze na stronie.
  3.Opcja trzy wyszukuje w napisie część, która jest otoczona nawiasami kwadratowymi i
 * wypisuje ją na stronie.

  Użyj wyrażeń regularnych. */

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['stringOptions']) 
        && isset($_POST['ordinaryString'])) {

    switch ($_POST['stringOptions']) {
        case "1":
            echo "Usunięte wszystkie znaki poza literami, cyframi i spacją: <br/>";
            echo preg_replace('/[^[:alnum:]\s]*/', '', $_POST['ordinaryString']) . "<br/>";
            break;

        case "2":
            echo "Usunięte wszystkie znaki poza cyframi, przecinkami, kropkami i spacją: <br/>";
            echo preg_replace('/[^\s\d\.\,]*/', '', $_POST['ordinaryString']) . "<br/>";
            break;

        case "3":
            echo "Część, która jest otoczona nawiasami kwadratowymi: <br/>";
            $matches = [];
            preg_match_all('/\[.*?\]/', $_POST['ordinaryString'], $matches);
            if (count($matches[0]) > 0) {
                foreach ($matches[0] as $k => $v) {
                    $counter = $k + 1;
                    echo "trafienie " . $counter . ": " . $v . "<br/>";
                }
            }
            break;

        default:
            echo "Coś poszło zdecydowanie nie tak...";
            break;
    }
}
?>

<!DOCTYPE HTML>
<html lang="pl">
    <head>
        <meta charset="utf-8" />	
        <title>zadanie 4</title>	
    </head>
    <body>

        <form action="#" method="POST">
            <input type="text" name="ordinaryString" placeholder="Wpisz dowolny napis"/> <br/>
            <p>I wybierz co chcesz z nim zrobić:</p>

            <select name="stringOptions">
                <option value="1">Usuń z napisu wszystkie znaki poza literami, cyframi i spacją</option>
                <option value="2">Usuń z napisu wszystkie znaki poza cyframi, przecinkami, kropkami i spacją</option>
                <option value="3">Wyszukaj w napisie część, która jest otoczona nawiasami kwadratowymi</option>
            </select>
            <input type="submit" value="Kliknij żeby uruchomić program">
        </form>

    </body>    
</html>

