<?php

include 'index.php';
include 'connection.php';

$conn = connectToCinemasDb();

//kasowanie kina
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['del_cinema']) && is_numeric($_GET['id'])) {

    $safeId = $conn->real_escape_string($_GET['id']);

    $sql = "DELETE FROM cinema WHERE id = $safeId";
    $result = $conn->query($sql);

    if ($result) {
        echo "Kino usunięte";
    } else {
        echo "Błąd kasowania";
    }
}

// kasowanie filmu
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['del_movie']) && is_numeric($_GET['id'])) {

    $safeId = $conn->real_escape_string($_GET['id']);

    $sql = "DELETE FROM movie WHERE id = $safeId";
    $result = $conn->query($sql);

    if ($result) {
        echo "Film usunięty";
    } else {
        echo "Błąd kasowania";
    }
}

// kasowanie płatności
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['del_payment']) && is_numeric($_GET['id'])) {

    $safeId = $conn->real_escape_string($_GET['id']);

    $sql = "DELETE FROM payment WHERE id = $safeId";
    $result = $conn->query($sql);

    if ($result) {
        echo "Płatność usunięta";
    } else {
        echo "Błąd kasowania";
    }
}

// kasowanie biletu
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['del_ticket']) && is_numeric($_GET['id'])) {

    $safeId = $conn->real_escape_string($_GET['id']);

    $sql = "DELETE FROM ticket WHERE id = $safeId";
    $result = $conn->query($sql);

    if ($result) {
        echo "Bilet usunięty";
    } else {
        echo "Błąd kasowania";
    }
}

$conn->close();
$conn = null;
?>

