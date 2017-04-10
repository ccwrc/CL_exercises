<?php

if (isset($_GET["path_to_img"])) {
    $imagePath = base64_decode($_GET["path_to_img"]);
    $imageSize = getimagesize($imagePath);
    header("Content-Type: " . $imageSize["mime"]);
    readfile($imagePath);
}

// http://php.net/manual/en/function.base64-encode.php

// http://funkcje.net/view/3/1/1435/index.html

// http://stackoverflow.com/questions/3967515/how-to-convert-image-to-base64-encoding