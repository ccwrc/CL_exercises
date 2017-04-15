<?php

function numberToText($number) {

    if ((!is_int($number)) || ($number < 0 || $number > 999)) {
        echo 'liczba poza zakresem lub brak liczby całkowitej';
    }

    if ($number == 0) {
        return 'zero';
    }

    $texts = [
        ['jeden', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć', 'siedem', 'osiem', 'dziewięć', 'dziesięć', 'jedenaście', 'dwanaście', 'trzynaście', 'czternaście', 'piętnaście', 'szesnaście', 'siedemnaście', 'osiemnaście', 'dziewiętnaście'],
        ['dziesięć', 'dwadzieścia', 'trzydzieści', 'czterdzieści', 'pięćdziesiąt', 'sześćdziesiąt', 'siedemdziesiąt', 'osiemdziesiąt', 'dziewięćdziesiąt'],
        ['sto', 'dwieście', 'trzysta', 'czterysta', 'pięćset', 'sześćset', 'siedemset', 'osiemset', 'dziewięćset']
    ];

    if ($number >= 1 && $number <= 19) {
        return $texts[0][$number - 1];
    }

    if ($number <= 99 && ($number % 10 == 0)) {
        $numberArr = str_split($number, 1);
        return $texts[1][$numberArr[0] - 1];
    }

    if ($number <= 99) {
        $numberArr = str_split($number, 1);
        return $texts[1][$numberArr[0] - 1] . " " . $texts[0][$numberArr[1] - 1];
    }

    if ($number <= 999 && ($number % 100 == 0)) {
        $numberArr = str_split($number, 1);
        return $texts[2][$numberArr[0] - 1];
    } else {
        $numberArr = str_split($number, 1);
        if (((int) ($numberArr[1]) . ($numberArr[2])) >= 1 && ((int) ($numberArr[1]) . ($numberArr[2])) <= 19) {
            $index2 = ((int) $numberArr[1] . $numberArr[2]) - 1;
            return $texts[2][$numberArr[0] - 1] . " " . $texts[0][$index2];
        }
        if ($number % 10 == 0) {
            return $texts[2][$numberArr[0] - 1] . " " . $texts[1][$numberArr[1] - 1];
        }
        return $texts[2][$numberArr[0] - 1] . " " . $texts[1][$numberArr[1] - 1] . " " . $texts[0][$numberArr[2] - 1];
    }
}
