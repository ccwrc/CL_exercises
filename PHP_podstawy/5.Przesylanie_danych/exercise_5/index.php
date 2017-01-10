<?php

/* W tym zadaniu dopisz funkcjonalnośc do 2 stron:

    Pierwsza strona (multi.php) ma pobierać 2 zmienne z GET o nazwach width i height 
 * (jeżeli informacje nie są przesłane to width = 5 i height =10), a następnie 
 * wygeneruje tabliczkę mnożenia o podanej wysokości i szerokości 
    Na drugiej stronie (index.php) stwórz kilka linków do pierwszej strony przesyłając
 *  informację za pomocą GET.      */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 5</title>
</head>
<body>

<?php

echo "<ul>";

for ($i = 0; $i <= 5; $i++) {

    $width = mt_rand(1, 10);
    $height = mt_rand(11, 20);

    echo "<li><a href=\"multi.php?width=$width&height=$height\"</li>szerokość: $width i wysokość: $height</a>";
}

echo "</ul>"

?>


</body>
</html>
