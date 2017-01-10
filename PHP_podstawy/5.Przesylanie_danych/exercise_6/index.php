<?php

/* Na stronie napisz formularz który będzie zawietał jedno pole tekstowe i jeden checkbox. 
 * Formularz ten ma przekierowywać do tej samej strony metodą POST. Skrypt ma sprawdzać 
 * czy wpisany przez użytkownika tekst zawiera wulgaryzmy – jeżeli tak, powinien zastąpić 
 * je dowolnymi znakami (np. frazę „cholera, znowu to PHP“ powinien zastąpić 
 * frazą „*******, znowu to PHP“). Jeżli użytkownik zaznaczy checkboxa 
 * „Jestem świadomy konsekwencji“ skrypt nie dokona sprawdzenia wulgaryzmów. 
 * Tekst wpisany przez użytkownika powinien być wyświetlany (w formie ocenzurowanej 
 * lub nie) pod formularzem.
Dodatkowo postaraj się, aby liczba gwiazdek odpowiadała liczbie znaków w cenzurowanym słowie. */

$displayText = "";
$specialChar = "*";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $displayText = $_POST['userText'];

    if (!isset($_POST['userAgreement'])) {
        $forbidden = ['elo', 'hiphop', 'kibic', 'legia', 'dresy'];
        $words = explode(' ', str_replace(',', '', $displayText));

        foreach ($words as $word) {
            if (in_array(strtolower($word), $forbidden)) {
                $wordLength = strlen($word);
                $replacement = '';
                for ($i = 0; $i < $wordLength; $i++)
                    $replacement.= $specialChar;
                $displayText = str_replace($word, $replacement, $displayText);
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 6</title>
</head>
<body>

<?php

// tutaj umieść kod który będzie wyświetlał napis
echo $displayText;

?>


<form action="#" method="POST">
    <label>
        Twój tekst:
        <input type="text" name="userText">
    </label>
    <label>
        Jestem świadomy konsekwencji
        <input type="checkbox" name="userAgreement">
    </label>
    <input type="submit">
</form>

</body>
</html>
