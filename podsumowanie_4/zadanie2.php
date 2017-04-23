<?php
/* Zadanie 2
Opisz, co to są wyjątki i do czego służą. Napisz przykładowy kod rzucający wyjątek klasy 
 * Exception, a następnie go obsługuje (łapie). Obsługa wyjątku ma polegać tylko i 
 * wyłącznie na wyświetleniu odpowiedniej informacji. */

/* Wyjątki są to mechanizmy odpowiedzi na zdarzenia nieprzewidziane (np. błędy) i sytuacje 
 * wyjątkowe, które nie powinny pojawić się w programie */

function exepctionTest() {
    throw new Exception();
}

try {
    exepctionTest();
} catch (Exception $e) {
    echo "wyjątek obsłużony";
}

