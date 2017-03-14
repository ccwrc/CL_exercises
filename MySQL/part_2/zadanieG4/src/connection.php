<?php

function connectToCinemaDb() {
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

    return $conn;
}
