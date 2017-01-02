<?php

/* Zamień ćwiczenia od 2 do 11 na funkcje. Pamiętaj o przyjmowaniu odpowiednich argumentów do 
 * funkcji i zwracaniu wartości */

// e2, e3 - zadania grupowe na tablicy

// e4
function exe4($sideA, $sideB, $sideC) {
    if (($sideA + $sideB > $sideC) &&
            ($sideC + $sideB > $sideA) &&
            ($sideA + $sideC > $sideB)) {
        return true;
    } else {
        return false;
    }
}

// e5
function exe5($varA, $varB, $varC) {
    $helpVar = $varA;

    if ($varB > $helpVar) {
        $helpVar = $varB;
    }

    if ($varC > $helpVar) {
        $helpVar = $varC;
    }

    return $helpVar;
}

// e6
function exe6($sumOfPoints) {
    if ($sumOfPoints >= 0 && $sumOfPoints <= 39) {
        return "ocena niedostateczna";
    } else if ($sumOfPoints >= 40 && $sumOfPoints <= 54) {
        return "ocena dopuszczająca";
    } else if ($sumOfPoints >= 55 && $sumOfPoints <= 69) {
        return "ocena dostateczna";
    } else if ($sumOfPoints >= 70 && $sumOfPoints <= 84) {
        return "ocena dobra";
    } else if ($sumOfPoints >= 85 && $sumOfPoints <= 98) {
        return "ocena bardzo dobra";
    } else if ($sumOfPoints >= 99 && $sumOfPoints <= 100) {
        return "ocena celująca";
    } else {
        return "wprowadziłeś dane spoza zakresu (1-100)";
    }
}

// e7
function exe7($lastNumber) {
    $total = 1;

    for ($lastNumber; $lastNumber > 1; $lastNumber--) {
        $total = $total * $lastNumber;
    }

    return $total;
}

// e8
function exe8($numberX, $numberY) {
    $total = 0;

    for ($numberX; $numberX <= $numberY; $numberX++) {
        $total = $total + $numberX;
    }

    return $total;
}

// e9
function exe9($numberN) {
    $iterator = 0;

    while ($iterator <= $numberN) {
        if ($iterator % 2 > 0) {
            echo "$iterator - nieparzysta <br/>";
        } else {
            echo "$iterator - parzysta <br/>";
        }
        $iterator++;
    }
}

// e10
function exe10($varN) {
    for ($i = 0; $i < $varN; $i++) {
        for ($j = 0; $j < $varN; $j++) {
            echo "* ";
        }
        echo "<br/>";
    }
}

// e11
function exe11($varN) {
    for ($i = 0; $i < $varN; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br/>";
    }
}

