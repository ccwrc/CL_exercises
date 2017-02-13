<?php

/* 
Zadanie A1 

Stwórz klasę Calculator. Konstruktor ma nie przyjmować żadnych danych. Każdy nowo stworzony obiekt 
 * powinien mieć pustą tablicę, w której będzie trzymać historię wywołanych operacji (stwórz ją w 
 * konstruktorze). Następnie dodaj do klasy następujące metody:

    add($num1, $num2) – metoda ma dodać do siebie dwie zmienne i zwrócić wynik. Dodatkowo w tablicy 
 * operacji ma zapamiętać napis: "added num1 to num2 got result".
    multiply($num1, $num2) – metoda ma pomnożyć przez siebie dwie zmienne i zwrócić wynik. Dodatkowo
 *  w tablicy operacji ma zapamiętać napis: "multiplied num1 with num2 got result".
    subtract($num1, $num2) – metoda ma odjąć od siebie dwie zmienne i zwrócić wynik. Dodatkowo w 
 * tablicy operacji ma zapamiętać napis: "subtracted num1 from num2 got result".
    divide($num1, $num2) – metoda ma podzielić przez siebie dwie zmienne i zwrócić wynik. Dodatkowo 
 * w tablicy operacji ma zapamiętać napis: "divided num1 by num2 got result". Pamiętaj, że nie 
 * można dzielić przez zero.
    printOperations() – metoda ma wypisać wszystkie zapamiętane operacje.
    clearOperations() – metoda ma wyczyścić wszystkie zapamiętane operacje.

Pamiętaj o używaniu this. Stwórz kilka kalkulatorów i przetestuj ich działanie.
 */

class Calculator {

    public $hisOperation = [];

    public function __construct() {
        $this->hisOperation = [];
    }

    public function add($num1, $num2) {
        $result = ($num1 + $num2);
        $this->addToOperationsHistory("added $num1 to $num2 got $result");
        //  $this->hisOperation[] = "added $num1 to $num2 got $result";
        return $result;
    }

    public function multiply($num1, $num2) {
        $result = ($num1 * $num2);
        $this->addToOperationsHistory("multiplied $num1 with $num2 got $result");
        return $result;
    }

    public function subtract($num1, $num2) {
        $result = ($num1 - $num2);
        $this->addToOperationsHistory("subtracted $num1 from $num2 got $result");
        return $result;
    }

    public function divide($num1, $num2) {
        if ($num2 == 0) {
            echo "Nie można dzielić przez zero, wprowadź ponownie poprawną wartość";
            return null;
        }
        $result = ($num1 / $num2);
        $this->addToOperationsHistory("divided $num1 by $num2 got $result");
        return $result;
    }

    public function printOperations() {
        foreach ($this->hisOperation as $value) {
            echo $value . "<br><br>";
        }
        return $this;
    }

    public function clearOperations() {
        $this->hisOperation = [];
    }

    protected function addToOperationsHistory($operation) { //zmienione z private na potrzeby AdvancedCalc
        $this->hisOperation[] = $operation;
    }

    public function multipleAny($numbers) { //przyjmuje tablicę
        $result = 1;
        foreach ($numbers as $number) {
            $result *= $number;
        }
        return $result;
    }

    public function multipleAnyNumber($numbers, $otherNumber) { // przyj. tablicę i liczbę
        $result = $this->multipleAny($numbers); // wyw. oddzi. funk. do mnozenia tabki
        $result = $this->add($result, $otherNumber); //funkcja do dodawania
        return $result;
    }

}
