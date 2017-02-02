<?php

/*  Napisz funkcję computeBankInvestment($amount, $percentage, $years) gdzie:

  $amount to liczba reprezentująca kwotę pieniędzy,
  $percentage to liczba reprezentująca procent zwrotu po pierwszym roku,
  $years to liczba lat.

  Dla uproszczenia możesz uznać, że wszystkie te zmienne to liczby całkowite.

  Funkcja powinna obliczać, ile pieniędzy będziemy mieli na koncie po podanym czasie.
 * Obowiązuje roczna kapitalizacja odsetek. Np.
  computeBankInvestment(1000, 5, 1); // => 1050
  computeBankInvestment(1000, 5, 2); // => 1102.5 */

function computeBankInvestment($amount, $percentage, $years) {
    $sum = $amount;
    $i = 0;
    
    while ($i < $years) {
        $sum = $sum + ($sum * ($percentage / 100));
        $i++;
    }
    return $sum;
}

// echo (computeBankInvestment(1000, 5, 2));
