<?php
/* Napisz stronę, która usunie film/kino/płatnośc/bilet o podanym id (zarówno informacje z której 
 * tabeli jak i id powinno być przekazane do strony za pomocą metody GET). Strona powinna 
 * wyświetać informacje o usunięciu wpisu z tabeli. */

$tableNames = ['cinema',
    'movie',
    'payment',
    'ticket'];

if (isset($_GET['table_name']) && $_GET['id'] != '' && is_numeric($_GET['id'])) {

    $serverName = "localhost";
    $userName = "root";
    $password = "coderslab";
    $database = "cinemas_db";

    $conn = new mysqli($serverName, $userName, $password, $database);

    if ($conn->connect_error) {
        die("Błąd połączenia, $conn->connect_error");
    }

    $id = $_GET['id'];
    $tableName = $_GET['table_name'];

    $sql = "SELECT * FROM $tableName WHERE id = $id";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            $sql = "DELETE FROM $tableName WHERE id = $id";
            $result = $conn->query($sql);
            if ($result) {
                echo "Usunięte.";
            } else {
                echo "Błąd, $conn->error";
            }
        } else {
            echo "ID nie istnieje.";
        }
    }

    $conn->close();
    $conn = null;
}
?>

<!DOCTYPE html>
<html>
    <body>    
        <form method="GET" action="">
            <select name="table_name">
                <?php
                foreach ($tableNames as $choice) {
                    echo "<option value=\"$choice\"> Tabela $choice</option>";
                }
                ?>    
            </select>
            <input type="text" name="id" placeholder="Wpisz id"/>
            <input type="submit" value="Kliknij żeby usunąć"/>
        </form>
    </body>
</html>