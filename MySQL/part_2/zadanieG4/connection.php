<?php

function connectToCinemaDb() {
    $serverName = "localhost";
    $userName = "root";
    $password = "coderslab";
    $database = "cinema_db";
    return new mysqli($serverName, $userName, $password, $database);
}
