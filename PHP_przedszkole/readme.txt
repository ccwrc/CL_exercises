4
/* Napisz skrypt który definiuje 3 liczby jako zmienne: a, b i c. Nastepnie sprawdzi czy podane 
 * liczby mogą być bokami trójkąta. Trójkąt można zbudować z 3 linii tylko wtedy kiedy:

a + b > c
c + b > a
a + c > b

Żeby wypisać coś na stronie użyj funkcji echo("Tekst który pokaże się na stronie"); */

5
/* Napisz program, który definiuje jako zmienne 3 liczby całkowite. Za pomocą używania instrukcji 
 * if, else wypisz na stronie największą z tych liczb. Do porównywania liczb użyj 
 * operatorów: > (większy), >= (większy równy), < (mniejszy), <= (mniejszy równy).  */

6
/* Napisz program, który wystawi ocenę z testu (użyj if, elseif i else). 
 * Pamiętaj o sprawdzeniu czy ilość punktów nie jest mniejsza niż 0 i większa niż 100.

    0 - 39 pkt - ocena niedostateczna
    40 - 54 pkt - ocena dopuszczająca
    55 - 69 pkt - ocena dostateczna
    70 - 84 pkt - ocena dobra
    85 - 98 pkt - ocena bardzo dobra
    99 - 100 pkt - ocena celująca
 */

7
/* Napisz program, który liczy wartość x!. gdzie ! oznacza silnię a x jest zmienną. 
 * Użyj do tego obu znanych Ci pętli.

Silnia jest zdefiniowana jako iloraz wszystkich liczb całkowitych w zakresie od 1 
 * do podanej liczby. Czyli:

5! = 1*2*3*4*5 = 120
8! = 1*2*3*4*5*6*7*8 = 40320
 */

8
/* Napisz program, który będzie liczył sumę wszystkich liczb w podanym przedziale od x do y. 
 * Użyj do tego obu znanych Ci pętli.

Np. dla podanego x = 5, y = 10 suma to 5+6+7+8+9+10=45 */

9
/* Napisz program który na podstawie wartości zmiennej n będzie wypisywał wszystkie liczby 
 * od 0..n. Przy każdej liczbie ma napisać czy jest ona parzysta czy nie, 
 * liczba i informacja o niej mają znaleźć się w jednej linii. Np:

0 – parzysta
1 – nieparzysta
2 – parzysta
3 – nieparzysta
...
 */

10
/* Napisz program który na podstawie wartości zmiennej n 
 * będzie rysował następujący schemat (tutaj dla n = 5):

* * * * * 
* * * * *
* * * * *
* * * * *
* * * * * 

Musisz do tego użyć pętli zagnieżdżonych! */

11
/* Napisz program który na podstawie wartości zmiennej n będzie rysował następujący schemat 
 * (tutaj dla n = 5). Użyj do tego 2ch pętli for.

* 
* * 
* * * 
* * * * 
* * * * * 

    Rozwiąż to zadanie używając pętli zależnych.
    Rozwiąż to zadanie używając pętli niezależnych i if-a.
 */

12
/* Napisz program który na podstawie wartości zmiennej n będzie rysował następujący 
 * schemat (tutaj dla n = 5):

  *   *   
*   *   *
  *   *  
*   *   *
  *   *   

Musisz do tego użyć pętli zagnieżdżonych a w wewnętrznej pętli dodać if który będzie 
 * sprawdzał odpowiedni warunek (jeżeli (i + j) jest nieparzyste to ma być gwiazdka). */

13
/* Napisz program który na podstawie wartości zmiennej n będzie rysował następujący schemat 
 * (tutaj dla n = 5):

* 2 3 4 5
* * 3 4 5
* * * 4 5
* * * * 5
* * * * * 
* * * * * 
* * * * 5
* * * 4 5
* * 3 4 5
* 2 3 4 5

Najpierw używając pętli zagnieżdżonych narysuj pierwszą połowę rysunku. Potem dopiero dopisz 
 * drugą parę pętli zagnieżdżonych która dorysuję resztę. */

14
/* Napisz program który napisze tabliczkę mnożenia dla podanej zmiennej n. 
 * Np., dla n = 3 wynik będzie wyglądać następująco:
1 x 1 = 1 	1 x 2 = 2 	1 x 3 = 3
2 x 1 = 2 	2 x 2 = 4 	2 x 3 = 6
3 x 1 = 3 	3 x 2 = 6 	3 x 3 = 9

Do mnożenia liczb użyj operatora *. Do stworzenia tabelki użyj tagów HTML (<table> <tr> <td>). */

15
/* Napisz funkcje o nazwie FooBar, przyjmującą jedną zmienną. Funkcja ta ma zwracać napis 
 * skonstruowany według nastepujących zasad: Napis ma się składać z kolejnych liczb całkowitych 
 * (zaczynając od 1-ki), ale:

    W miejsce liczb podzielnych przez 3 wypisywać Foo
    W miejsce liczb podzielnych przez 5 wypisywać Bar
    W miejsce liczb podzielnych przez 3 i 5 wypisywać FOOBAR

Np. Dla parametru x = 15 wynik ma być: 12Foo4BarFoo78FooBar11Foo1314FOOBAR */

16
/* Napisz funkcję, która pobiera liczbę a i n jako argument i zwraca jako wynik a do potęgi n.

Nie używaj funkcji wbudowanej pow() tylko pętli! */

17
/* Napisz funkcję, która przyjmuje liczbę n jako argument i wyświetla n razy na stronie napis 
 * "Programowanie w PHP jest fajne!". */

18
/* Napisz funkcję, która pobiera 3 liczby jako argumenty i zwraca 
 * największą z nich (zwraca a nie wypisuje na ekranie). */

19
/* Zamień ćwiczenia od 2 do 11 na funkcje. Pamiętaj o przyjmowaniu odpowiednich argumentów do 
 * funkcji i zwracaniu wartości */

dodatkowe 1
/* Ćwiczenie dodatkowe 1
Napisz funkcję sprawdzającą czy podana liczba jest liczbą pierwszą (jest podzielna tylko przez 1 
 * i samą siebie). Funkcja ma zwracać wartość true albo false (boolean).

Zastosuj podejście brute force:
Algorytm brute force jest najprostszą, a zarazem najbardziej czasochłonną metodą na wyznaczanie 
 * liczb pierwszych. Jego działanie opiera się na sprawdzeniu wszystkich potencjalnych 
 * dzielników danej liczby - jeżeli dana liczba nie dzieli się przez żadną inną liczbę całkowitą 
 * (oprócz jedynki i samej siebie) to jest ona oznaczana jako pierwsza.

W celu optymalizacji algorytmu, sprawdza się wszystkie potencjalne dzielniki nie większe niż 
 * pierwiastek z samej sprawdzanej liczby - większe wartości nie mogą być już dzielnikami.

Żeby dostać resztę z dzielenia użyj operatora %, np.:
12 % 5 = 2
 */

dodatkowe 2
/* Ćwiczenie dodatkowe 2
Napisz funkcję, która będzie losowała liczbę z zakresu 0-20 aż nie wylosuje liczby 10.

Za każdym razem kiedy wylosuje złą liczbę ma wypisać na ekran „Zła liczba”, a w chwili 
 * wylosowania poprawnej ma wypisać „Poprawna liczba”. Funkcja ma zwracać ilość przeprowadzonych 
 * losowań.
http://php.net/manual/pl/function.rand.php
Do losowania liczb użyj funkcji rand.  */

dodatkowe 3
/* Ćwiczenie dodatkowe 3
Napisz program który będzie zwracał wartość liczby Pi używając następującej formuły:

pi = 4 * ((1/1 - 1/3) + (1/5 - 1/7) + (1/9 - 1/11) + ...)

Zobacz jak zmienia się precyzja wyniku w zależności od ilości iteracji twojej pętli. */

dodatkowe 4
/* Ćwiczenie dodatkowe 4
Liczbą doskonałą nazywamy liczbę, która jest sumą wszystkich swoich dzielników. Jest to np. 6, 
 * ponieważ 6 = 3 + 2 + 1.

Liczbą niekompletną nazywamy liczbę, która jest większa od sumy wszystkich swoich dzielników. 
 * Jest to np. 10 (1+2+5=8 < 10).

Napisz program który wypisze wszystkie liczby od 0 do wcześniej zdefiniowanej liczby x 
 * i określi czy jest to liczba doskonała, niekompletna czy żadna z nich. */

dodatkowe 5
/* Ćwiczenie dodatkowe 5

Napisz funkcję mySin(x, iterNum) i myCos(x, iterNum), która zwraca aproksymacje funkcji 
 * sinus i cosinus używając następujących wzorów:

sin(x) = (x^1)/1! - (x^3)/3! + (x^5)/5! - (x^7)/7! + (x^9)/9! - (x^11)/11! + ...
cos(x) = (x^0)/0! - (x^2)/2! + (x^4)/4! - (x^6)/6! + (x^8)/8! - (x^10)/10! + ...

Pamiętaj że 0! = 1

Żeby to zrobić najpierw napisz funkcje do wyliczania silni, potem do wyliczania potęgi a 
 * na koniec połącz je w całość. */


