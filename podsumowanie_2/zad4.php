<?php
/* W pliku zad4.php znajduje się klasa MyDate. Przeanalizuj dokładnie jej kod a następnie:

    Dopisz konstruktor który stworzy obiekt MyDate nastawiony na 1 Stycznia roku 2000.
    Dopisz publiczne getery i setery dla atrybutów klasy. Setery nie powinny pozwolić na 
 * nastawienie danych znajdujących się poza opisanymi zakresami. W przypadku próby takiego 
 * zapisu atrybut klasy nie powinien być zmieniony (do sprawdzenia czy przekazana zmienna jest 
 * liczbą całkowitą użyj funkcji is_integer).

    Dopisz ciało metody moveForwardByDays($days). Metoda ta powinna przesuwać datę do przodu o 
 * podaną ilość dni (do sprawdzenia czy przekazana zmienna jest liczbą całkowitą użyj funkcji 
 * is_integer). Jeżeli do metody zostaną przekazane złe dane (np. liczba ujemna, zmienna nie 
 * będąca liczbą całkowitą) metoda nie powinna nic robić.

    Pamiętaj o zachowaniu poprawnych wartości zarówno dni, jak i miesięcy i lat.

    Dla uproszczenia możesz założyć że każdy miesiąc ma 31 dni.
 */

class MyDate{
    private $day; //Wartość pomiędzy 0-31 nie powinna wychodzić pomiędzy te zakresy. 
                  //Dla uproszczenia możesz założyć że każdy miesiąc ma 31 dni.
    private $month; //Wartość pomiędzy 0-12 nie powinna wychodzić pomiędzy te zakresy 
    private $year; //Wartość większa niż 0
    
    public function __construct($day = 1, $month = 1, $year = 2000) {
        $this->setDay($day);
        $this->setMonth($month);
        $this->setYear($year);
    }
    
    public function getDay() {
        return $this->day;
    }
    
    public function getMonth() {
        return $this->month;
    }
    
    public function getYear() {
        return $this->year;
    }
    
    public function setDay($day) {
        if (is_integer($day) && ($day >= 1) && ($day <= 31)) {
            $this->day = $day;
        } else {
            return false;
        }
        return $this;
    }
    
    public function setMonth($month) {
        if (is_integer($month) && ($month >= 1) && ($month <= 12)) {
            $this->month = $month;
        } else {
            return false;
        }
        return $this;
    }
    
    public function setYear($year) {
        if (is_integer($year) && ($year > 0)) {
            $this->year = $year;
        } else {
            return false;
        }
        return $this;
    }

    // nie mozna uzyc funkcji czasu przy zalozeniu, ze kazdy miesiac ma 31 dni...
    public function moveForwardByDays($days) {
        if (is_integer($days) && ($days >= 1)) {
            $years = $days / 372;
            $years = (int) $years;
            $days = $days - ($years * 372);

            $months = $days / 31;
            $months = (int) $months;
            $days = $days - ($months * 31);

            $this->year = $this->year + $years;
            $this->month = $this->month + $months;

            if ($this->month > 12) {
                $this->year++;
                $this->month = $this->month - 12;
            }

            $this->day = $this->day + $days;
            if ($this->day > 31) {
                $this->month++;
                $this->day = $this->day - 31;
                if ($this->month > 12) {
                    $this->year++;
                    $this->month = $this->month - 12;
                }
            }
        }
    }

}


