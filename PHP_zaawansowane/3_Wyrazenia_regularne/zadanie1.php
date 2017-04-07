<?php
/* Zadanie 1
  Napisz funkcje sprawdzającą, czy hasło spełnia wszystkie poniższe wymagania:

  1.Ma od 10 do 15 znaków.
  2.Ma minimum jedną małą literę.
  3.Ma minimum jedną wielką literę.
  4.Nie zawiera dwóch wielkich lub dwóch małych liter z rzędu. Jeżeli hasło nie spełnia
 * któregoś z wymagań – funkcja powinna zwrócić false. Napisz formularz, który będzie korzystał 
 * z podanej funkcji i walidował hasło. */

function checkPassword($password) {

    if ((strlen($password) < 10) || (strlen($password) > 15)) {
        return false;
    } //10-15 znakow

    if (!(preg_match('/[a-z]+/', $password) == 1)) {
        return false;
    } // min. 1 mala litera

    if (!(preg_match('/[A-Z]+/', $password) == 1)) {
        return false;
    } // min. 1 wielka litera    

    if (!(preg_match('/[a-z]{2,}|[A-Z]{2,}/', $password) == 0)) {
        return false;
    } // 2 male lub duze z rzedu

    return true;
}

// wersja alternatywna
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pass'])) {
    if (checkPassword2($_POST['pass'])) {
        echo "poprawne";
    } else {
        echo "błędne";
    }
}

function checkPassword2($password) {
    if (preg_match('/^.{10,15}$/', $password) == 1) {
        if (preg_match('/[a-z]+/', $password) == 1) {
            if (preg_match('/[A-Z]+/', $password) == 1) {
                if (preg_match('/[a-z]{2,}|[A-Z]{2,}/', $password) == 0) {
                    return true;
                }
            }
        }
    }
    return false;
}
?>

<html>

    <form action="" method="POST">
        <input name="pass" type="password" placeholder="podaj hasło">
        <input type="submit" value="sprawdź">
    </form>

</html>