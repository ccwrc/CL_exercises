<?php

function myWordWrap($string, $length) {

    if ((strlen($string)) <= $length) {
        return $string;
    }

    $wordsArr = explode(' ', $string);
    if (strlen(reset($wordsArr)) > $length) {
        return '';
    }

    $currentWord = 0;
    $output = '';
    while ((strlen($output)) < $length) {
        if (isset($wordsArr[$currentWord]) && (strlen($output . $wordsArr[$currentWord]) <= $length)) {
            $output .= $wordsArr[$currentWord] . ' ';
            $currentWord++;
        } else {
            break;
        }
    }
    $output = trim($output);
    if (strlen($string) > strlen($output)) {
        $output .= '...';
    }

    return $output;
}

var_dump(myWordWrap("bla ble blu", 4));