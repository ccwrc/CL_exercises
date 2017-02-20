<?php

/*
  Stwórz klasę Circle, która ma spełniać następujące wymogi:
 * 1. Dziedziczyć po kształcie. 
 * 2. Mieć dodatkowy atrybut promień. 
 * 3. Mieć konstruktor przyjmujący zmienne określające wartości x, y, kolor i promień. 
 * Konstruktor powinien wypisywać informacje o właśnie stworzonym okręgu. Pamiętaj o sprawdzeniu:
  czy podane zmienne są liczbami (jeżeli nie są, to nastaw oba na 0),
  czy podany kolor jest napisem.
  Mieć destruktor, który wypisuje informacje o niszczonym okręgu.
  Mieć funkcję dostępu (get, set) do promienia.
  Nadpisywać funkcje kształtu (nadpisz tylko te, które tego wymagają).
  Mieć funkcję zwracającą pole powierzchni.
  Mieć funkcję zwracającą obwód. */

include_once 'Shape.php';
include_once 'AdvancedCalculator.php'; //na potrzeby funkcji getArea

class Circle extends Shape {

    private $radius;

    public function __construct($x, $y, $color, $radius) {
        parent::__construct($x, $y, $color, false);
        $this->setRadius($radius);
        echo "Stworzyłem coś o parametrach x= $this->x, y= $this->y, kolor= $this->color, "
                . "promień= $this->radius";
    }

    protected function setRadius($radius) {
        if (is_numeric($radius) && $radius > 0) {
            $this->radius = $radius;
        } else {
            $this->radius = 1;
        }
        return $this;
    }

    protected function getRadius() {
        return $this->radius;
    }

    public function __destruct() {
        echo "Niszczymy okrąg  o parametrach x= $this->x, y= $this->y, kolor= $this->color, "
                . "promień= $this->radius";
    }

    public function getArea() {
        $calc = new AdvancedCalculator();
        //  $area = M_PI * $this->getRadius() * $this->getRadius();
        $area = M_PI * $calc->pow($this->getRadius(), 2);
        return $area; //M_PI (stała) dziala takze jako pi()
    }

    public function getPerimeter() {
        $perimeter = 2 * M_PI * $this->getRadius();
        return $perimeter;
    }

}
