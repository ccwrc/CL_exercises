<?php

/*
  Zadanie A2

  Stwórz klasę Shape, która ma spełniać następujące wymogi:

  Mieć prywatne atrybuty: x, y (określające środek tego kształtu) i color.
  Posiadać konstruktor przyjmujący zmienne określające wartości x, y i color. Konstruktor powinien
 *  wypisywać informacje o właśnie stworzonym kształcie. Pamiętaj o sprawdzeniu:
  czy podane zmienne są liczbami (jeżeli nie są, to nastaw oba na 0),
  czy podany kolor jest napisem.
  Mieć destruktor wypisujący informacje o niszczonym kształcie.
  Mieć funkcję wypisującą informacje o tym kształcie.
  Mieć funkcję zwracającą odległość od innego kształtu.

  Sprawdź, co się dzieje, kiedy zmieniasz dostęp do poszczególnych funkcji z publicznych na prywatne.
 *  Zobacz, co stanie się jeżeli zmienisz atrybuty dostepu do konstruktora i destruktora.
 */

class Shape {

    protected $x;  //zmiana z private na potrzeby innej funkcji
    protected $y;    // zmiana z priv jw
    protected $color;   //zmiana z priv jw

    /* stary konstruktor
      public function __construct($x, $y, $color) {
      $this->setX($x);
      $this->setY($y);
      $this->setColor($color);
      echo "Stworzyłem obiekt o paramatrach: x= $this->x y= $this->y i kolorze: $this->color";
      } */

    public function __construct($x, $y, $color, $showInfo = true) {
        $this->setX($x);
        $this->setY($y);
        $this->setColor($color);
        if ($showInfo) { //dzieki false w klasie dziecka nie bedzie tego komunikatu
            echo "Stworzyłem obiekt o paramatrach: x= $this->x y= $this->y i kolorze: $this->color";
        }
    }

    // zmiana z private na potrzeby klasy dziecka
    protected function setX($x) {
        if (!is_numeric($x)) {
            $x = 0;
        }
        $this->x = $x;
        return $this; // return this potrzebne do łańcucha
    }

    // zmiana z private na potrzeby klasy dziecka
    protected function setY($y) {
        if (!is_numeric($y)) {
            $y = 0;
        }
        $this->y = $y;
        return $this;
    }

    // zmiana z private na potrzeby klasy dziecka
    protected function setColor($color) {
        if (!is_string($color)) {
            $color = 'transparent';
        }
        $this->color = $color;
        return $this;
    }

    public function __destruct() {
        echo "Zniszczyłem obiekt o paramatrach: x= $this->x y= $this->y i kolorze: $this->color";
    }

    public function printInfo() {
        echo "Ten obiekt ma parametry: x= $this->x y= $this->y i kolor: $this->color";
    }

    public function distance($shape) {
        $x = abs($this->x - $shape->x); //abs - wartosc bezwzgledna np. -5 -> 5
        $y = abs($this->y - $shape->y);  // abs nie jest tu potrzebny, ale fajnie poznac 
        $result = sqrt(($x * $x) + ($y * $y));  // sqrt - pier. kwadratowy z argumentu
        return $result;
    }

}
