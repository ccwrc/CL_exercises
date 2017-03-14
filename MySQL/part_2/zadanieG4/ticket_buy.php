<?php
include 'src/menu.php';
include 'src/connection.php';

$conn = connectToCinemaDb();

$sql = "SELECT Cinemas.name AS cinema, Movies.name AS movie, show_cm.id AS show_id FROM Cinemas 
JOIN show_cm ON Cinemas.id=show_cm.cinema_id
JOIN Movies ON Movies.id=show_cm.movie_id";

$result = $conn->query($sql);
?>

<h3>Kup bilet na seans</h3>
<form method="POST" action="ticket_pay.php">
    <select name="show_id">
        <option>wybierz seans z listy</option>
        <?php
        foreach ($result as $row) {
            echo "<option value=" . $row['show_id'] . ">" . $row['cinema'] . " | Film: " . $row['movie'] . "</option>";
        }
        ?>
        <input type="submit" value="kup">
    </select>
</form>
