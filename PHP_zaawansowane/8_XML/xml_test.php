<?php

$loadedFile = simplexml_load_file(__DIR__ . '/../xml/reed.xml');
$courses = $loadedFile->xpath('course');

// var_dump($courses);

for ($i = 0; $i <= 5; $i++) {
    // var_dump($courses[$i]);
    echo $courses[$i]->title . "<br/>";
    echo $courses[$i]->time->start_time . "<br/>";
}

