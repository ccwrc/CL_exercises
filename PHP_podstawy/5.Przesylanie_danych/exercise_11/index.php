<?php

/*Napisz skrypt który będzie przeliczał temperaturę w stopniach celsjusza na temeraturę w stopniach
 *  fahrenheita (i w drugą stronę). Na stronie masz już przygotoway formularz. Formularz ma dwa 
 * guziki submit, z tą samą nazwą (atrybut name nastawiony na wartość convertionType) ale inną 
 * wartością (atrybut value). Żeby przekonać się który guzik został wciśnięty zobacz jaka będzie 
 * wartość w tablicy $_POST pod kluczem convertionType. Jeżeli chcesz więcej przeczyać o tym jak 
 * odróżniać który z guzików submit został naciśnięty możesz to zrobić tutaj:
 * http://stackoverflow.com/questions/2680160/how-can-i-tell-which-button-was-clicked-in-a-php-
form-submit/2680198#2680198 
 * Żeby przeliczyć jednostki użyj wzorów znajdujących się tutaj: 
https://pl.wikipedia.org/wiki/Skala_Fahrenheita#Spos.C3.B3b_dok.C5.82adny */

$temperature = 0;

function convertToCels($temperature) {
    return (5 / 9) * ($temperature - 32);
}

function convertToFahr($temperature) {
    return 32 + ((9 / 5) * $temperature);
}


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['convertionType'] == "celcToFahr") {
        $temperature = convertToFahr($_POST['degrees']);
    } else {
        $temperature = convertToCels($_POST['degrees']);
    }
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zadanie 11</title>
    </head>
    <body>

<?php
// Tutaj umieść kod który będzie wyświetlał przeliczoną wartość
echo "Przeliczona temperatura to: " . $temperature;

?>

        <form action="#" method="POST">
            <label>
                Temperatura:
                <input type="number" min="0.00" step="0.01" name="degrees">
            </label>
            <input type="submit" name="convertionType" value="celcToFahr">
            <input type="submit" name="convertionType" value="FahrToCelc">
        </form>

    </body>
</html>

