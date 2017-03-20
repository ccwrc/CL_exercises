PHP – TDD

Każde zadanie powinno być rozwiązane w osobnym pliku.

---------------------------------------------------------------------
Zadanie A1 

Napisz funkcję zamieniającą liczbę na zapis słowny tej liczby. Np. 143 zamieni na „sto czterdzieści trzy”. Liczby mają być w zakresie do tysiąca (ale bez tysiąca). Napisz testy do tej funkcji.

---------------------------------------------------------------------
Zadania A2 – FizzBuzz

Napisz funkcję, która przyjmuje liczbę całkowitą. Funkcja wypisuje w kolejności liczby od 1 do podanej liczby, ale:

    w miejsce liczb podzielnych przez 3 wypisuje Fizz,
    w miejsce liczb podzielnych przez 5 wypisuje Buzz,
    w miejsce liczb podzielnych przez 3 i 5 wypisuje BuzzFizz.

Na przykład dla argumentu x = 15 wynik ma być następujący:

12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzz

Napisz testy do tej funkcji.
---------------------------------------------------------------------
Zadanie A3 – rok przestępny

Napisz funkcję, która przyjmuje liczbę całkowitą (oznaczającą rok) i zwraca true – jeżeli rok jest przestępny, false jeżeli nie. Napisz testy do tej funkcji.
---------------------------------------------------------------------
Zadanie A4 – Word wrap

Napisz funkcję wordWrap($string, $length), której zadaniem jest skrócić napis do podanej długości (i dodanie na końcu ...). Funkcja ma działać w taki sposób żeby, żadne słowo nigdy nie zostało przecięte. Napisz testy do tej funkcji.
---------------------------------------------------------------------
Zadanie A5 – PrimeFactors

Napisz klasę mającą jedną statyczną metodę generatePrimeFactors(n), która wygeneruje wszystkie dzielniki podanej liczby n w kolejności numerycznej (od najmniejszego). Do tego zadania użyj w pełni metodologii TDD.
---------------------------------------------------------------------

Zadanie B1 

Napisz klasę o nazwie BowlingGame służącą do podliczania wyników w grze w kręgle. Klasa ma mieć co najmniej dwie funkcje:

    roll(pins) – funkcja używana, gdy gracz rzuca,
    score() – funkcja zwracająca liczbę punktów uzyskanych do tej pory.

Zasady, które muszą być spełnione:

    Gra w kręgle składa się z 10 ramek.
    Każda ramka składa się z dwóch rzutów, w których można uzyskać maksymalnie 10 punktów (tyle jest kręgli na torze).
    Liczba punktów z ramki to liczba zbitych kręgli + bonusy za strike i spare.
    Spare – gracz zbija wszystkie 10 kręgli w dwóch rzutach należących do jednej ramki. Wtedy do punktów z tej ramki są doliczane punkty z następnego rzutu (pierwszego rzutu następnej ramki). Np: W pierwszej ramce gracz rzucił 6 i 4. W kolejnej ramce rzucił 3 i 5. Punktacja za pierwszą ramkę to 13 (6 + 4 + 3), punktacja za drugą ramkę to 8.
    Strike – gracz zbija wszystkie kręgle za pierwszym rzutem należącym do ramki (nie ma drugiego rzutu w tej ramce). W takim przypadku do wyniku z tej ramki dodawane są punkty z kolejnych dwóch rzutów. Np: W pierwszej ramce gracz rzucił 10. W kolejnej – 3 i 5. Punktacja za pierwszą ramkę to 17 (10 + 3 + 5), punktacja za drugą ramkę to 8.
    Jeżeli w ostatniej ramce gracz rzucił strike albo spare, to przysługują mu dodatkowe rzuty (ale nie więcej niż trzy).

Tu upewnisz się, jak powinien działać taki program: http://www.bowlinggenius.com/

Przed napisaniem klasy stwórz następujące przypadki testowe (test case):

    Wszystkie rzuty zbiły 0 kręgli – suma punktów powinna być 0.
    Wszystkie rzuty zbijają po jednym kręglu – suma punktów powinna być 10.
    Strike w pierwszym rzucie, następnie 0 zbitych, a potem wszystkie pudła – suma punktów powinna być 16.
    Strike w pierwszym rzucie, następnie 3 zbite kręgle, następnie 4 zbite kręgle, a potem wszystkie pudła – suma punktów powinna wynosić 24.
    Spare w pierwszej ramce (obojętnie jak zdobyty), potem w następnym rzucie 4, następnie 3 i reszta same pudła. Suma punktów powinna wynosić 21.
    Gra perfekcyjna (10 razy strike).
----------------------------------------------------------------------
Zadanie B2 – klasa User

Napisz klasę User implementującą następujące funkcjonalności:

    Rejestracje użytkownika.
    Logowanie.
    Edycję danych (łącznie ze zmianą hasła).
    Wczytanie i zapamiętanie do bazy danych.

Napisz to zadanie, używając w pełni metodologii TDD. Pamiętaj o testowaniu danych wczytanych z fikstur.
----------------------------------------------------------------------
Zadanie B3 – testowanie gotowego kodu

W katalogu znajduje się skompresowany kod, zapoznaj się z nim. Jest to obiektowe rozwiązanie warsztatów. Napisz testy do tego kodu i odnajdź błędy.

----------------------------------------------------------------------
Zadanie C1 – ankiety

Napisz prosty system do tworzenia ankiet (chodzi tylko o back-end – nie pisz widoków). System ma być napisany w pełni obiektowo według poniższych założeń.

Ankieta:

    Ma mieć własną nazwę, unikatowy link.
    Ma implementować następujące metody:

    zwracającą listę pytań dla danej ankiety,
    zwracanie nazwy,
    zmiana nazwy,
    zapisanie zmian do bazy danych.

    Ma implementować następujące statyczne metody:

    stworzenie nowej ankiety,
    wczytanie ankiety o podanym id z bazy danych,
    usunięcie ankiety o podanym id z bazy danych.

Pytanie:

    Ma mieć tekst pytania.
    Ma implementować metody:

    zwracającą wszystkie udzielone odpowiedzi na to pytanie,
    zmieniające tekst pytania, zwracające tekst pytania,
    zapamiętujące pytanie do bazy danych.

    Ma implementować statyczne metody:

    stworzenie nowego pytania (potrzebuje podania id ankiety),
    wczytanie pytania o podanym id z bazy danych,
    usunięcie pytania o podanym id z bazy danych.

Odpowiedź:

    Ma mieć tekst odpowiedzi.
    Ma implementować metody:
        zmieniające tekst odpowiedzi,
        zwracające tekst odpowiedzi,
        zapamiętujące odpowiedź do bazy danych.
    Ma implementować statyczne metody:
        stworzenie nowej odpowiedzi (potrzebuje podania id pytania),
        wczytanie odpowiedzi o podanym id z bazy danych,
        usunięcie odpowiedzi o podanym id z bazy danych.

Testy do zadania mają być pisane z użyciem ładowania odpowiednych fikstur do baz danych. mają być utworzone cztery grupy testowe, po jednej na każdą klasę i jedna testująca wszystko.












