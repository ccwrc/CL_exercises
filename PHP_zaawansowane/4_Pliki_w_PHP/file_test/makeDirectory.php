<?php

function makeDirectory($path) {
    if (is_dir($path)) {
        echo "$path exists<br>";
    } else {
        mkdir($path);
        echo "created $path";
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    var_dump($_FILES);
    
    //   <input type="file" name="image">
//array (size=1)
//  'image' => 
//    array (size=5)
//      'name' => string 'chomiktest.jpg' (length=14)
//      'type' => string 'image/jpeg' (length=10)
//      'tmp_name' => string '/tmp/phpKVDmSX' (length=14)
//      'error' => int 0
//      'size' => int 48736
    
}
?>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" value="wgraj">
</form>