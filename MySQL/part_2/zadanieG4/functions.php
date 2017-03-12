<?php

function showMoviesByCinemaId($id, $conn) {
    $showMovieSql = "SELECT Movies.name as movie_name FROM Movies JOIN show_cm ON "
            . "Movies.id=show_cm.movie_id LEFT JOIN Cinemas ON Cinemas.id=show_cm.cinema_id "
            . "WHERE Cinemas.id=$id GROUP BY movie_name ORDER BY movie_name ASC";
    $result = $conn->query($showMovieSql);

    if ($result->num_rows > 0) {
        echo "<b> Lista filmów: </b><br/>";
        foreach ($result as $row) {
            echo $row['movie_name'] . "<br/>";
        }
    }
}

function displayShowingByCinemaId($id, $conn) {
    $showingSql = "SELECT * FROM show_cm WHERE cinema_id = $id";
    $result = $conn->query($showingSql);

    if ($result->num_rows > 0) {
        echo "<b> Seanse numer: </b>";
        foreach ($result as $row) {
            echo $row['id'] . " ";
        }
        echo "<br/>";
    }
}

function showCinemasBymovieId($id, $conn) {
    $showCinemasSql = "SELECT Cinemas.name as cinema_name FROM Cinemas JOIN show_cm ON "
            . "show_cm.cinema_id=Cinemas.id LEFT JOIN Movies ON Movies.id=show_cm.movie_id "
            . "WHERE Movies.id = $id GROUP BY cinema_name ORDER BY cinema_name ASC";
    $result = $conn->query($showCinemasSql);

    if ($result->num_rows > 0) {
        echo "<b> Lista kin wyświetlających film: </b><br/>";
        foreach ($result as $row) {
            echo $row['cinema_name'] . "<br/>";
        }
    }
}
