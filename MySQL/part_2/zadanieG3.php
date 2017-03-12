<?php
/* Połącz tabele Kina i Filmy poprzez relację wiele do wielu (film może być wyświetlany w wielu 
 * kinach, kino może mieć wiele filmów). Dodatkowo stworzoną tabelę nazwij Seans. Następnie:

  Napisz stronę, na której można stworzyć nowy seans.
  Napisz stronę, na której można wybrać wszystkie kina mające w repertuarze dany film.
  Napisz stronę, na której wypisane są wszystkie filmy wyświetlane w danym kinie. */

// tworzenie tabeli
//    CREATE TABLE show_cm(
//    id int AUTO_INCREMENT NOT NULL,
//    cinema_id int NOT NULL,
//    movie_id int NOT NULL,
//    PRIMARY KEY(id),
//    FOREIGN KEY(cinema_id) REFERENCES Cinemas(id),
//    FOREIGN KEY(movie_id) REFERENCES Movies(id)
//    );

$serverName = "localhost";
$userName = "root";
$password = "coderslab";
$database = "cinema_db";
$conn = new mysqli($serverName, $userName, $password, $database);

if ($conn->connect_error) {
    die('Błąd połączenia' . $conn->connect_error);
}

$setEncodingSql = "SET CHARSET utf8";
$conn->query($setEncodingSql);

// Napisz stronę, na której można stworzyć nowy seans.
echo "<hr/> <b>nowy seans</b>";

$cinemaSql = "SELECT * FROM Cinemas";
$cinemaResult = $conn->query($cinemaSql);
$movieSql = "SELECT * FROM Movies";
$movieResult = $conn->query($movieSql);

?>
<form method="POST" action="zadanieG3_new_show.php">
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
// Napisz stronę, na której można wybrać wszystkie kina mające w repertuarze dany film.
echo "<hr/> <b>wszystkie kina mające w repertuarze dany film</b>";
?>
<form method="POST" action="zadanieG3_show_cinema.php">
</label>
<label> Wybierz film
    <select name="movie_list_id">
        <option></option>
        <?php
        foreach ($movieResult as $row) {
            echo "<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
        }
        ?>
    </select>
</label>
<input type="submit" value="kliknij">
</form>


<?php
$conn->close();
$conn = null;
