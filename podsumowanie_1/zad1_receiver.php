<?php

/* W pliku zad1_sender.php napisz link odnoszący się do strony zad1_receiver.php i przekazujący 
 * zmienne metodą GET. Przekazane zmienne są następujące:

    $name = "jacek"
    $mail = "jacek@somemail.com"
    $id = 34

W pliku zad1_receiver.php napisz kod, który odbierze te zmienne i wyświetli je na ekranie. */

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['name']) && trim($_GET['name']) != '' 
        && isset($_GET['mail']) && trim($_GET['mail']) != '' && isset($_GET['id']) 
        && trim($_GET['id']) != '') {
    echo "name: " . $_GET['name'] . ", mail: " . $_GET['mail'] . ", id: " . $_GET['id'];
} else {
    echo "Źle przekazane dane GET";
}
?>