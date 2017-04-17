<?php

/* Napisz klasę o nazwie BowlingGame służącą do podliczania wyników w grze w kręgle. Klasa ma mieć
 *  co najmniej dwie funkcje:

  roll(pins) – funkcja używana, gdy gracz rzuca,
  score() – funkcja zwracająca liczbę punktów uzyskanych do tej pory.

  Zasady, które muszą być spełnione:

  Gra w kręgle składa się z 10 ramek.
  Każda ramka składa się z dwóch rzutów, w których można uzyskać maksymalnie 10 punktów (tyle jest
 *  kręgli na torze).
  Liczba punktów z ramki to liczba zbitych kręgli + bonusy za strike i spare.
  Spare – gracz zbija wszystkie 10 kręgli w dwóch rzutach należących do jednej ramki. Wtedy do
 * punktów z tej ramki są doliczane punkty z następnego rzutu (pierwszego rzutu następnej ramki).
 *  Np: W pierwszej ramce gracz rzucił 6 i 4. W kolejnej ramce rzucił 3 i 5. Punktacja za
 *  pierwszą ramkę to 13 (6 + 4 + 3), punktacja za drugą ramkę to 8.
  Strike – gracz zbija wszystkie kręgle za pierwszym rzutem należącym do ramki (nie ma drugiego
 * rzutu w tej ramce). W takim przypadku do wyniku z tej ramki dodawane są punkty z kolejnych 
 * dwóch rzutów. Np: W pierwszej ramce gracz rzucił 10. W kolejnej – 3 i 5. Punktacja za pierwszą 
 * ramkę to 17 (10 + 3 + 5), punktacja za drugą ramkę to 8.
  Jeżeli w ostatniej ramce gracz rzucił strike albo spare, to przysługują mu dodatkowe
 * rzuty (ale nie więcej niż trzy).

  Tu upewnisz się, jak powinien działać taki program:
  http://www.bowlinggenius.com/

  Przed napisaniem klasy stwórz następujące przypadki testowe (ang. test case):

  Wszystkie rzuty zbiły 0 kręgli – suma punktów powinna być 0.
  Wszystkie rzuty zbijają po jednym kręglu – suma punktów powinna być 10.
  Strike w pierwszym rzucie, następnie 0 zbitych, a potem wszystkie pudła – suma punktów powinna
 *  być 16.
  Strike w pierwszym rzucie, następnie 3 zbite kręgle, następnie 4 zbite kręgle, a potem wszystkie
 * pudła – suma punktów powinna wynosić 24.
  Spare w pierwszej ramce (obojętnie jak zdobyty), potem w następnym rzucie 4, następnie 3 i
 * reszta same pudła. Suma punktów powinna wynosić 21.
  Gra perfekcyjna (10 razy strike).
 */

class BowlingGame {

    private $scoreArray;
    private $points;
    private $spareSum;
    private $isPerfect;

    public function __construct() {
        $this->scoreArray = [];
        $this->points = 0;
        $this->spareSum = 0;
        $this->isPerfect = true;
    }

    public function roll($pins) {
        if (is_int($pins) && $pins >= 0 && $pins <= 10) {
            $this->scoreArray[] = $pins;
        }
    }

    public function score() {
        // kregle -> bowling ninepins ten-pin bowling //w zalez od rodzaju
        foreach ($this->scoreArray as $throw => $pins) {

            if ($this->isPerfect && $pins < 10) {
                $this->isPerfect = false;
            }

            if (!$this->isPerfect || ($this->isPerfect && $throw < 9)) {
                $this->points += $pins;
            }

            if ($throw % 2 == 0) {
                $this->spareSum = 0;
            }

            $this->spareSum += $pins;

            if ($pins == 10) {
                //strike
                if (isset($this->scoreArray[$throw + 1])) {
                    $this->points += $this->scoreArray[$throw + 1];
                }
                if (isset($this->scoreArray[$throw + 2])) {
                    $this->points += $this->scoreArray[$throw + 2];
                }
            } elseif ($this->spareSum == 10) {
                //spare
                if (isset($this->scoreArray[$throw + 1])) {
                    $this->points += $this->scoreArray[$throw + 1];
                }
            }
        }

        return $this->points;
    }

}
