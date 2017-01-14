<?php

/* Napisz skrypt, który na podstawie podanych ocen (formularz ocen z przedmiotów) będzie 
 * liczył ich średną arytmetyczną. Oceny trzymaj w tablicy którą będziesz wkładać do sesji. 
 * Zadbaj o walidację wprowadzanych ocen (nie mniejsza niż 2 i nie większa niż 5). 
 * Pamiętaj żeby sprawdzać czy tablica z ocenami istnieje w sesji - jeżeli nie to ją stwórz. 
 * Wszystkie oceny jakie są zapamiętane i ich średnia powinny być wyświetlane nad formularzem. 
 * Do trzymania tablicy w ciasteczku użyj funkcje serialize, a do wczytania unserialize. */

// tutaj umieść kod który będzie zarządzał sesją i dodawał oceny do tabelki.
// Pamiętaj o tym że po dodaniu oceny do tabelki wczytanej z sesji musisz tabelkę
// jeszcze raz umieścić w sesji (inaczej nie będzie tam nowo dodanej oceny)
// Tutaj też oblicz średnią

session_start();
if(!isset($marks)) {
    $marks = [];
}

/////////////////////////////////////////
function countAverage($marks) {
    if (count($marks) == 0) {
        return null;
    }

    $sum = 0;
    foreach ($marks as $mark) {
        $sum += $mark;
    }
    return $sum / count($marks);
}
/////////////////////////////////////////


if (isset($_COOKIE['client_marks'])) {
    $marks = unserialize($_COOKIE['client_marks']);
} else {
    setcookie('client_marks', serialize($marks), time() + 3600);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $mark = $_POST['grade'];

    if ($mark >= 2 && $mark <= 5) {
        $marks[] = $mark;
    }
    setcookie('client_marks', serialize($marks), time() + 3600);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 8</title>
</head>
<body>

<?php

if (isset($_COOKIE['client_marks'])) {
    $cookieMarks = unserialize($_COOKIE['client_marks']);

    foreach ($cookieMarks as $k => $v) {
        $k++;
        echo "Ocena nr $k to: $v <br/>";
    }
}

echo "<br/> Średnia to: " . countAverage(@$cookieMarks) . "<br/>";

?>

<form action="#" method="POST">
    <label>
        Ocena:
        <input type="number" step="1" name="grade">
    </label>
    <input type="submit">
</form>

</body>
</html>
