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

        <ul>
        <?php
            for ($i = 0; $i < 7; $i++) {
                $start = mt_rand(1, 5);
                $end = mt_rand(6, 10);
                ?>
                <li><a href="startend.php?start=<?= $start ?>&end=<?= $end ?>" </li>
                od <?= $start ?>  do <?= $end ?> </a>

        <?php } ?> </ul>

</body>
</html>

