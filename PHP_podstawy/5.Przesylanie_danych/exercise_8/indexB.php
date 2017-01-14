<?php
/* Tutaj umieść kod który:
 * 1. Wczyta tablicę z ocenami z sesji (jeżeli jej nie ma to ją utworzy)
 * 2. Wczyta dane przesłane POST-em
 * 3. Jeżeli dane spełniają założenia (liczba z zakresu 1-6) to doda ją na końcu tablicy
 * 4. nastawi nową wartość w sesji (do sesji wkładamy tablicę z nową oceną)
 * 5. Wyliczy średną  z ocen  */

session_start();
$marks = [];

function countAverage($marks) {
    @$marks_polski = $marks['polski'];
    @$marks_angielski = $marks['angielski'];
    @$marks_informatyka = $marks['informatyka'];
    $sum = 0;
    $average = 0;

    foreach ($marks_angielski as $mark) {
        $sum+= $mark;
    }

    foreach ($marks_informatyka as $mark) {
        $sum+= $mark;
    }

    foreach ($marks_polski as $mark) {
        $sum+= $mark;
    }

    $average = $sum / ((count($marks_angielski) + count($marks_informatyka) + count($marks_polski)));
    return $average;
}

if (isset($_SESSION['oceny'])) {
    $marks = $_SESSION['oceny'];
} else {
    $_SESSION['oceny'] = $marks;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $subject = $_POST['przedmiot'];
    $mark = $_POST['ocena'];

    if ($mark >= 1 && $mark <= 6) {
        $marks[$subject][] = $mark;
    }

    $_SESSION['oceny'] = $marks;
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 8 v2</title>
</head>
<body>

<?php
// tutaj umieść kod wyświetlający tablicę z ocenami i średną z nich
echo "Wartość średnia: ". countAverage($marks);
echo "<br><br>";
?>

<form method="POST">
    <label>Wybierz przedmiot: </label>
    
    <select name="przedmiot">    
        <option>polski</option>
        <option>angielski</option>
        <option>informatyka</option>
    </select>
   
    <input type="text" name="ocena"/> 
    <input type="submit" value="dodaj ocenę"/>
</form>
    
<?php
echo "<br/>";
echo "Wykaz ocen: ";
echo "<pre>";
print_r($marks);
echo "</pre>";
?>

</body>
</html>