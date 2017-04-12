<?php
/* Zadanie 1
  Napisz stronę kontakt posiadającą formularz z następującymi polami:

  imię i nazwisko,
  adres email,
  treść wiadomości.

  Wypełniony formularz ma być przesyłany w postaci emaila na ustalony w kodzie adres.
  Skorzystaj z biblioteki PHPMailer. */

// https://github.com/PHPMailer/PHPMailer
// https://github.com/PHPMailer/PHPMailer/blob/master/examples/gmail.phps
// https://github.com/PHPMailer/PHPMailer/blob/master/examples/send_file_upload.phps

// require 'vendor/autoload.php';

if (($_SERVER["REQUEST_METHOD"] === "POST") && isset($_POST["nickname"]) 
        && isset($_POST["mailAddress"]) && isset($_POST["message"]) 
        && isset($_POST["subject"])) {
   
    require_once __DIR__.'/vendor/autoload.php';
    $mailer = new PHPMailer();

    // konfig
    $mailer->isSMTP();
    $mailer->Host = "smtp.gmail.com";
    $mailer->SMTPAuth = true;
    $mailer->Username = "ccwrctestcc@gmail.com";
    $mailer->Password = "tajnehaslo"; // prosze nie zmieniac :)
    $mailer->SMTPSecure = "tls";
    $mailer->Port = 587;

    // wysylka
    $mailer->CharSet = "UTF-8";
    $mailer->setFrom($_POST["mailAddress"], $_POST["nickname"]);
    $mailer->addAddress("ccwrcltd@gmail.elo", "Funky Koval"); 
    $mailer->Subject = $_POST["subject"];
    $mailer->Body = $_POST["message"];
    if (!$mailer->send()) {
        echo "Błąd wysyłania wiadomości: " . $mailer->ErrorInfo . "<br/>";
    } else {
        echo "Wiadomość wysłana <br/>";
    }
    
}
?>

<html>
    <form method="POST">
        <label>
            od kogo:<br/>
            <input type="text" name="nickname" required="required"/>
        </label>
        <br>
        <label>
            adres email:<br/>
            <input type="email" name="mailAddress" required="required"/>
        </label>
        <br>
        <label>
            temat wiadomości:<br/>
            <input type="text" name="subject" required="required"/>
        </label>
        <br>
        <label>
            treść wiadomości:<br/>
            <textarea name="message" cols="40" rows="5" required="required"></textarea>
        </label>
        <br>
        <input type="submit" value="Wyślij wiadomość"/>
    </form>
</html>
