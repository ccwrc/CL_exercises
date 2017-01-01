<?php

/* Napisz program który napisze tabliczkę mnożenia dla podanej zmiennej n. 
 * Np., dla n = 3 wynik będzie wyglądać następująco:
1 x 1 = 1 	1 x 2 = 2 	1 x 3 = 3
2 x 1 = 2 	2 x 2 = 4 	2 x 3 = 6
3 x 1 = 3 	3 x 2 = 6 	3 x 3 = 9

Do mnożenia liczb użyj operatora *. Do stworzenia tabelki użyj tagów HTML (<table> <tr> <td>). */
?>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<?php

$varN = 6;

echo "<table>";
echo "<tr>";

for ($i = 1; $i <= $varN; $i++) {
    echo "</tr>";
    for ($j = 1; $j <= $varN; $j++) {
        echo "<td>";
        echo "$i x $j =";
        echo $i * $j;
        echo "</td>";
    }
}

echo "</table>";