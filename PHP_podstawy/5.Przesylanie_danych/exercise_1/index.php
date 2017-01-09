<?php

/* Napisz stronę, która wczyta ze zmiennej superglobalnej dwie zmienne $start i $end 
 * (dla uproszczenia załóźmy że będziemy przesyłać tylko liczby całkowite). Następnie 
 * wypisze wszaystkie liczby od $start do $end. Jeżeli zmienne nie są przesłane to wypisz 
 * odpowiednią informację na ten temat. Następnie na drugiej stronie stwórz kilka linków 
 * w html do pierwszej strony przesyłając informację za pomocą GET. */

?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zadanie 1</title>
    </head>
<body>

    <?php
    echo "<ul>";

    for ($i = 0; $i <= 5; $i++) {
        
        $start = mt_rand(1, 10);
        $end = mt_rand(11, 20);
        
        echo "<li><a href=\"startend.php?start=$start&end=$end\"</li>od $start do $end</a>";
    }

    echo "</ul>";
    ?>

</body>
</html>

