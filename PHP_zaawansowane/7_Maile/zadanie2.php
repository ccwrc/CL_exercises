<?php
/* Zadanie 2
  Dodaj odpowiednie nagłówki do maila, tak aby odpowiedź była wysyłana na adres podany w formularzu
  (a nie adres serwera, który ją wysłał). Dodaj możliwość przesyłania pliku, który będzie
  wstawiany jako załącznik. Ogranicz wielkość pliku do 200kB i typ (tylko pliki png i pliki pdf). */

// https://github.com/PHPMailer/PHPMailer
// https://github.com/PHPMailer/PHPMailer/blob/master/examples/gmail.phps
// https://github.com/PHPMailer/PHPMailer/blob/master/examples/send_file_upload.phps

if (($_SERVER["REQUEST_METHOD"] === "POST") && isset($_POST["nickname"]) 
        && isset($_POST["mailAddress"]) && isset($_POST["message"]) && isset($_POST["subject"])) {

    require_once __DIR__ . '/vendor/autoload.php';
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

    //odpowiedź wysyłana na adres podany w formularzu
    $mailer->addReplyTo($_POST["mailAddress"], $_POST["nickname"]);

    $mailer->Subject = $_POST["subject"];
    $mailer->Body = $_POST["message"];

    //załącznik
    if (isset($_FILES["attachment"]) && $_FILES["attachment"]["size"] > 0 && $_FILES["attachment"]["size"] <= 204800) { // 200*1024
        // http://funkcje.net/view/3/1606/index.html
        // http://php.net/manual/en/function.finfo-open.php
        $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
        // http://stackoverflow.com/questions/9458418/finfo-file-on-uploaded-file-to-determine-mime-type
        $mime = finfo_file($fileInfo, $_FILES["attachment"]["tmp_name"]);
        if ($mime === "image/jpeg" || $mime === "application/pdf") { //nie jpg tylko jpeg slepaku...
            $mailer->addAttachment($_FILES["attachment"]["tmp_name"], $_FILES["attachment"]["name"]);
            echo "Załącznik dodany <br/>";
        } else {
            echo "Zły typ załącznika - wysyłam bez załącznika <br/>";
        }
    } else {
        echo "Brak lub załącznik większy niż 200 kB - wysyłam bez załącznika <br/>";
    }

    if (!$mailer->send()) {
        echo "Błąd wysyłania wiadomości: " . $mailer->ErrorInfo . "<br/>";
    } else {
        echo "Wiadomość wysłana <br/><br/>";
    }
}
?>

<html>
    <form method="POST" enctype="multipart/form-data" action="">
        <label>
            od kogo:<br/>
            <input type="text" name="nickname" required="required"/>
        </label>
        <br/>
        <label>
            adres email:<br/>
            <input type="email" name="mailAddress" required="required"/>
        </label>
        <br/>
        <label>
            temat wiadomości:<br/>
            <input type="text" name="subject" required="required"/>
        </label>
        <br/>
        <label>
            treść wiadomości:<br/>
            <textarea name="message" cols="40" rows="5" required="required"></textarea>
        </label>
        <br/>
        <label>
            dodaj załącznik:<br/>
            <input type="file" name="attachment">
        </label>
        <br/>
        <input type="submit" value="Wyślij wiadomość"/>
    </form>
</html>
