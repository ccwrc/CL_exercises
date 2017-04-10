<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    if ($_FILES["image"]["size"] > 0) {
        $uploadDir = __DIR__ . "/zadanie1img/" . date("Y-m-d");
        if (is_dir($uploadDir)) {
            echo $uploadDir . "istnieje <br/>";
        } else {
            mkdir($uploadDir);
        }

        $md5hash = md5($_FILES["image"]["name"]);
        var_dump($md5hash);
        
        
        
        
        
    }
}
?>

<html>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="fileToUpload"/>
        <input type="submit" value="UploadImg"/>
    </form>  
</html>
