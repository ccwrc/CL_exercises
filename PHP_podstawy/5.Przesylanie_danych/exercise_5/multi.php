<?php

if ($_SERVER['REQUEST_METHOD'] != 'GET') {
    echo "Obsługiwane tylko GET";
}

$width = (isset($_GET['width']) && trim($_GET['width']) != '') ? $_GET['width'] : 5;
$height = (isset($_GET['height']) && trim($_GET['height']) != '') ? $_GET['height'] : 10;


function multiply($height, $width) {

    echo "<table border='1'>";
    echo "<tr>";
    for ($i = 1; $i <= $height; $i++) {
        echo "</tr>";
        for ($j = 1; $j <= $width; $j++) {
            echo "<td>";
            echo "$i x $j =";
            echo $i * $j;
            echo "</td>";
        }
    }
    echo "</table>";
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 5</title>
</head>
<body>

<?php

multiply($height, $width);

?>


</body>
</html>
