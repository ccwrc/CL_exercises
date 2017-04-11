<?php
/* Zadanie 
  Zmień zadanie 1. z wyrażeń regularnych tak, żeby w przypadku niespełnienia odpowiedniego warunku
 * – funkcja rzucała odpowiedni wyjątek. Następnie popraw formularz w taki sposób, żeby te 
 * wyjątki obsługiwał. */
// http://www.php.net/manual/en/function.set-exception-handler.php

require_once 'exception_test/InvalidLenghtException.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pass'])) {

    try {
        $isValid = checkPassword($_POST['pass']);
    } catch (InvalidLenghtException $e) {
        echo $e->getMessage();
    } catch (Exception $ex) {
        //
    }
}

function checkPassword($password) {
    if (preg_match('/^.{10,15}$/', $password) == 1) {
        if (preg_match('/[a-z]+/', $password) == 1) {
            if (preg_match('/[A-Z]+/', $password) == 1) {
                if (preg_match('/[a-z]{2,}|[A-Z]{2,}/', $password) == 0) {
                    return true;
                }
            }
        }
    } else {
        throw new InvalidLenghtException("Hasło zbyt krótkie lub zbyt długie");
    }
}
?>

<html>

    <form action="" method="POST">
        <input name="pass" type="password" placeholder="podaj hasło">
        <input type="submit" value="sprawdź">
    </form>

</html>
