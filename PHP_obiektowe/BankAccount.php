<?php

/*
  Stwórz klasę BankAccount, która ma spełniać następujące wymogi:
  Mieć prywatne atrybuty:
  number - atrubyt ten powinien trzymać numer identyfikacyjny konta (dla uproszczenia
 *  możemy założyć że numerem konta może być dowolna liczba całkowita),
  cash - atrybut określający ilość pieniędzy na koncie. Ma to być liczba zmiennoprzecinkowa.
  Posiadać konstruktor przyjmujący tylko numer konta. Atrubyt cash powinien być zawsze nastawiany
 *  na 0 dla nowo tworzonego konta.
  Posiadać getery do atrybutów number i cash, ale NIE posiadać do nich seterów (nie chcemy żeby
 * raz stworzone konto mogło zmienić swój numer, a do atrybuty cash dodamy specjalne funkcje 
 * modyfikujące jej wartość).
  Posiadać metodę 'depositCash($amount)' której rolą będzie zwiększenie wartości atrybutu cash
 *  o podaną watość. Pamiętaj o sprawdzeniu czy podana wartość jest:
  Wartością numeryczną,
  Wieksza od 0
  Posiadać metodę 'withdrawtCash($amount)' której rolą będzie zmniejszenie wartości atrybutu
 * cash o podaną watość. Metoda ta powinna zwracać ilość wypłaconych pieniędzy. Dla uproszczenia
 *  zakładamy że ilośc pieniędzy na koncie nie może zejść poniżej 0, np. jeżeli z konta na którym
 *  jest 300zł próbujemy wypłacić 500zł to metoda zwroci nam tylko 300zł. Pamiętaj o sprawdzeniu
 *  czy podana wartość jest:
  Wartością numeryczną,
  Wieksza od 0
  Posiadać metodę prontInfo nie przyjmującą żadnych parametrów. Metoda ta ma wyświetlić
 * informację o numerze konta i jego stanie.
 */

class BankAccount {

    private $number;
    private $cash;
    static private $nextAccNumber = 1;

    public function __construct() {
// $this->number = $number; przerobka na potrzeby zadania C2
        $this->number = self::$nextAccNumber; //numer konta bedzie wynosil 1
        self::$nextAccNumber++; // i nastepne utworzone konto dzieki ++ zmiennej stat. bedzie mialo inny numer
        $this->cash = 0;
        echo "Utworzyłeś konto o numerze: $this->number ";
    }

    public function getCash() {
        return $this->cash;
    }

    public function getNumber() {
        return $this->number;
    }

    public function depositCash($amount) {
        if (is_numeric($amount) && $amount > 0) {
            $this->cash += $amount;
        }
        return $this;
    }

    public function withdrawCash($amount) {
        if (is_numeric($amount) && $amount > 0) {
            if ($this->cash >= $amount) {
                $withdraw = $amount;
            } else {
                $withdraw = $this->cash;
            }
            $this->cash -= $withdraw;
            return $withdraw;
        }
    }

    public function printInfo() {
        echo "Twój stan konta to: $this->cash, numer twojego konta to: $this->number";
    }

}
