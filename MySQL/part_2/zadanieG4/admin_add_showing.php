<?php
include 'src/menu.php';
include 'src/connection.php';
include 'src/functions.php';

$conn = connectToCinemaDb();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_cinema']) 
        && is_numeric($_POST['add_cinema']) && isset($_POST['add_movie']) 
        && is_numeric($_POST['add_movie'])) {

    $cinema = $conn->real_escape_string($_POST['add_cinema']);
    $movie = $conn->real_escape_string($_POST['add_movie']);

    $newShowSql = "INSERT INTO show_cm (id, cinema_id, movie_id) VALUES (NULL, $cinema, $movie)";
    $result = $conn->query($newShowSql);

    if ($result) {
        echo "Utworzyłeś nowy seans o ID " . $conn->insert_id;
    }
}

$cinemaSql = "SELECT * FROM Cinemas";
$cinemaResult = $conn->query($cinemaSql);
$movieSql = "SELECT * FROM Movies";
$movieResult = $conn->query($movieSql);
?>

<h3>dodaj seans</h3>

<form method="POST" action="">
    <label> Wybierz kino
        <select name="add_cinema">

            <option></option>
<?php
foreach ($cinemaResult as $row) {
    echo "<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
}
?>
        </select>
    </label>
    <label> Wybierz film
        <select name="add_movie">
            <option></option>
<?php
foreach ($movieResult as $row) {
    echo "<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
}
?>
        </select>
    </label>
    <input type="submit" value="nowy seans">
</form>

<?php
$conn->close();
$conn = null;

