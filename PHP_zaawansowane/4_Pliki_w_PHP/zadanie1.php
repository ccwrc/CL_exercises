<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
//    var_dump($_FILES["image"]);
//    // z dumpa:
//    array (size=5)
//  'name' => string 'chomiktest.jpg' (length=14)
//  'type' => string 'image/jpeg' (length=10)
//  'tmp_name' => string '/tmp/phpCeqAWe' (length=14)
//  'error' => int 0
//  'size' => int 48736

    if ($_FILES["image"]["size"] > 0) {
        $uploadDir = __DIR__ . "/zadanie1img/" . date("Y-m-d");
        if (is_dir($uploadDir)) {
            echo $uploadDir . "istnieje <br/>";
        } else {
            mkdir($uploadDir);
        }

        $md5hash = md5($_FILES["image"]["name"]);
        // var_dump($md5hash);
        $uploadDir .= "/" . substr($md5hash, 0, 2);
        if (is_dir($uploadDir)) {
            echo $uploadDir . "istnieje <br/>";
        } else {
            mkdir($uploadDir);
        }

        $uploadDir .= "/" . substr($md5hash, -2);
        if (is_dir($uploadDir)) {
            echo $uploadDir . "istnieje <br/>";
        } else {
            mkdir($uploadDir);
        }

        $uploadFile = $uploadDir . "/" . basename($_FILES["image"]["name"]);
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadFile)) {
            echo "<hr/>" . $uploadFile . "klawo jak cholera Egon";
            echo '<a href="showImage.php?path_to_img=' . base64_encode($uploadFile) . '" target="_blank">show_img</a>';
        } else { // base64encode -> showImage.php
            echo "błąd wysyłania";
        }
    }
}
// http://www.php.rk.edu.pl/w/p/obrbka-grafiki-w-php/
// http://php.net/manual/en/ref.image.php
?>

<html>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="fileToUpload"/>
        <input type="submit" value="UploadImg"/>
    </form>  
</html>
