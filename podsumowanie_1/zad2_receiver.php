<?php

/* W pliku zad2_form.html napisz formularz do logowania się. Formularz musi wskazywać na 
 * stronę zad2_reciver.php i przesyłać dane metodą POST. Formularz musi mieć następujące pola:

    mail,
    hasło.

W pliku zad2_receiver.php napisz kod, który odbierze te informacje i wyświetli je na ekranie. */

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email']) && trim($_POST['email']) != '' 
        && isset($_POST['password']) && trim($_POST['password']) != '') {
    print $_POST['email'] . "<br>" . $_POST['password'];
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Źle przekazane dane POST";
} else if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "Wymagane dane POST";
}