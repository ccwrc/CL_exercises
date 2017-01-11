<?php

// tutaj umieść kod który będzie przeliczał waluty
$newAmount = 0;
$amount = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $amount = $_POST['cashAmount'];
}

$conversions = [
    'EURtoUSD' => 1.1,
    'USDtoEUR' => 0.9,
    'EURtoPLN' => 4.3,
    'PLNtoEUR' => 0.23,
    'USDtoPLN' => 0.26,
    'PLNtoUSD' => 3.9
];

@$newAmount = $conversions[$_POST['conversionType']] * $amount;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 7</title>
</head>
<body>

<?php

// Tutaj umieść kod który będzie wyświetlał przeliczoną walutę
echo "Przeliczone: " . $newAmount;

?>

<form action="#" method="POST">
    <label>
        Kwota:
        <input type="number" min="0.00" step="0.01" name="cashAmount">
    </label> <br>
    <label>
        Konwersja: <br>
        <input type="radio" name="conversionType" value="EURtoUSD" checked> EUR → USD <br>
        <input type="radio" name="conversionType" value="USDtoEUR" > USD → EUR <br>
        <input type="radio" name="conversionType" value="EURtoPLN" > EUR → PLN <br>
        <input type="radio" name="conversionType" value="PLNtoEUR" > PLN → EUR <br>
        <input type="radio" name="conversionType" value="USDtoPLN" > USD → PLN <br>
        <input type="radio" name="conversionType" value="PLNtoUSD" > PLN → USD <br>
    </label>
    <input type="submit">
</form>

</body>
</html>
