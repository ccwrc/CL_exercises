<?php
/* Zadanie 1
Napisz formularz pobierający:

    imię i nazwisko,
    plik.

Następnie kod zapisuje plik w katalogu ./files, do nazwy pliku dodaje {imię}_{nazwisko}.

Przykładowa nazwa pliku:
raport_october.pdf

Nowa nazwa pliku:
jan_kowalski_raport_october.pdf    */

 if ($_SERVER['REQUEST_METHOD'] === "POST" && $_POST['name'] != '' && $_POST['surname'] != '' 
         && $_FILES['file']['size'] > 0) {

    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $fileName = trim($_FILES['file']['name']);

    $newDirFiles = __DIR__ . "/files";
    if (!file_exists($newDirFiles)) {
        mkdir($newDirFiles);
    }
    $uploadFile = $newDirFiles . "/" . $name . "_" . $surname . "_" . basename($fileName);
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        echo("upload complete!");
    } else {
        echo("upload failed!");
    }
}
?>

<html>
    <head>
        <meta charset="utf-8" />
        <title>zadanie 1</title>	
    </head>

    <body>

        <form method="POST" action="#" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="name"/>
            <input type="text" name="surname" placeholder="surname"/>
            <!-- http://stackoverflow.com/questions/16001586/change-the-no-file-chosen -->
            <input type="file" name="file"/>
            <input type="submit" value="submit file">
        </form>

    </body>
</html>
