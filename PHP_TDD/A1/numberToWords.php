<?php

function numberToWords($number) {

    // http://php.net/manual/pl/spl.exceptions.php
    if (!is_int($number)) {
        throw new UnexpectedValueException($number . ' nie wprowadziłeś liczby całkowitej');
    }

    if ($number < 0 || $number > 999) {
        throw new RangeException($number . ' liczba poza zakresem 0-999');
    }

    if ($number == 0) {
        return 'zero';
    }

    $texts = [
        ['jeden', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć', 'siedem', 'osiem', 'dziewięć', 'dziesięć', 'jedenaście', 'dwanaście', 'trzynaście', 'czternaście', 'piętnaście', 'szesnaście', 'siedemnaście', 'osiemnaście', 'dziewiętnaście'],
        ['dziesięć', 'dwadzieścia', 'trzydzieści', 'czterdzieści', 'pięćdziesiąt', 'sześćdziesiąt', 'siedemdziesiąt', 'osiemdziesiąt', 'dziewięćdziesiąt'],
        ['sto', 'dwieście', 'trzysta', 'czterysta', 'pięćset', 'sześćset', 'siedemset', 'osiemset', 'dziewięćset']
    ];

    // http://php.net/manual/en/function.str-split.php
    $numberArr = str_split($number, 1);
    $ret = [];
    foreach ($numberArr as $key => $digit) {
        $digit = (int) $digit;

        if ((count($numberArr) == 2 && $key == 0 && $digit == 1) || (count($numberArr) == 3 && $key == 1 && $digit == 1)) {

            $digitIndex = $numberArr[$key + 1] + 9;
            $ret[] = $texts[0][$digitIndex];
            break;
        } elseif ($digit != 0) {
            $textIndex = count($numberArr) - 1 - $key;
            $ret[] = $texts[$textIndex][$digit - 1];
        }
    }

    return implode(' ', $ret);
}
