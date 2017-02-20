Zadanie A1 

Stwórz klasę Calculator. Konstruktor ma nie przyjmować żadnych danych. Każdy nowo stworzony obiekt powinien mieć pustą tablicę, w której będzie trzymać historię wywołanych operacji (stwórz ją w konstruktorze). Następnie dodaj do klasy następujące metody:

    add($num1, $num2) – metoda ma dodać do siebie dwie zmienne i zwrócić wynik. Dodatkowo w tablicy operacji ma zapamiętać napis: "added num1 to num2 got result".
    multiply($num1, $num2) – metoda ma pomnożyć przez siebie dwie zmienne i zwrócić wynik. Dodatkowo w tablicy operacji ma zapamiętać napis: "multiplied num1 with num2 got result".
    subtract($num1, $num2) – metoda ma odjąć od siebie dwie zmienne i zwrócić wynik. Dodatkowo w tablicy operacji ma zapamiętać napis: "subtracted num1 from num2 got result".
    divide($num1, $num2) – metoda ma podzielić przez siebie dwie zmienne i zwrócić wynik. Dodatkowo w tablicy operacji ma zapamiętać napis: "divided num1 by num2 got result". Pamiętaj, że nie można dzielić przez zero.
    printOperations() – metoda ma wypisać wszystkie zapamiętane operacje.
    clearOperations() – metoda ma wyczyścić wszystkie zapamiętane operacje.

Pamiętaj o używaniu this. Stwórz kilka kalkulatorów i przetestuj ich działanie.
-------------------------------------------------------------------------------------------
Zadanie A2

Stwórz klasę Shape, która ma spełniać następujące wymogi:

    Mieć prywatne atrybuty: x, y (określające środek tego kształtu) i color.
    Posiadać konstruktor przyjmujący zmienne określające wartości x, y i color. Konstruktor powinien wypisywać informacje o właśnie stworzonym kształcie. Pamiętaj o sprawdzeniu:
        czy podane zmienne są liczbami (jeżeli nie są, to nastaw oba na 0),
        czy podany kolor jest napisem.
    Mieć destruktor wypisujący informacje o niszczonym kształcie.
    Mieć funkcję wypisującą informacje o tym kształcie.
    Mieć funkcję zwracającą odległość od innego kształtu.

Sprawdź, co się dzieje, kiedy zmieniasz dostęp do poszczególnych funkcji z publicznych na prywatne. Zobacz, co stanie się jeżeli zmienisz atrybuty dostepu do konstruktora i destruktora.
-------------------------------------------------------------------------------------------
Zadanie A3

Stwórz klasę BankAccount, która ma spełniać następujące wymogi:

    Mieć prywatne atrybuty:
        number - atrubyt ten powinien trzymać numer identyfikacyjny konta (dla uproszczenia możemy założyć że numerem konta może być dowolna liczba całkowita),
        cash - atrybut określający ilość pieniędzy na koncie. Ma to być liczba zmiennoprzecinkowa.
    Posiadać konstruktor przyjmujący tylko numer konta. Atrubyt cash powinien być zawsze nastawiany na 0 dla nowo tworzonego konta.
    Posiadać getery do atrybutów number i cash, ale NIE posiadać do nich seterów (nie chcemy żeby raz stworzone konto mogło zmienić swój numer, a do atrybuty cash dodamy specjalne funkcje modyfikujące jej wartość).
    Posiadać metodę 'depositCash($amount)' której rolą będzie zwiększenie wartości atrybutu cash o podaną watość. Pamiętaj o sprawdzeniu czy podana wartość jest:
        Wartością numeryczną,
        Wieksza od 0
    Posiadać metodę 'withdrawtCash($amount)' której rolą będzie zmniejszenie wartości atrybutu cash o podaną watość. Metoda ta powinna zwracać ilość wypłaconych pieniędzy. Dla uproszczenia zakładamy że ilośc pieniędzy na koncie nie może zejść poniżej 0, np. jeżeli z konta na którym jest 300zł próbujemy wypłacić 500zł to metoda zwroci nam tylko 300zł. Pamiętaj o sprawdzeniu czy podana wartość jest:
        Wartością numeryczną,
        Wieksza od 0
    Posiadać metodę prontInfo nie przyjmującą żadnych parametrów. Metoda ta ma wyświetlić informację o numerze konta i jego stanie.
-------------------------------------------------------------------------------------------
Zadanie A4

Stwórz klasę Employee, która ma spełniać następujące wymogi: 1. Mieć prywatne atrybuty:

    id - atrubyt ten powinien trzymać numer identyfikacyjny pracownika,
    firstName - atrybut określający imię pracownika,
    lastName - atrybut określający nazwisko pracownika,
    salary - atrybut określający ile pracownik zarabia za godzinę.
        Posiadać konstruktor przyjmujący id, imię, nazwisko i płace za godzinę.
        Posiadać getery i setery do atrybutów firstName, lastName i salary. Do atrybutu id będzie potrzebny tylko geter.
        Posiadać metodę 'raiseSalary($percent)' której rolą będzie zwiększenie wartości atrybutu salary o podany procent. Pamiętaj o sprawdzeniu czy podana wartość jest:
    Wartością numeryczną,
    Wieksza (lub równa) od 0
-------------------------------------------------------------------------------------------
Zadanie B1 

Stwórz klasę AdvancedCalculator, która dziedziczy po klasie Calculator. Klasa powinna implementować następujące metody:

    pow($num1, $num2) – metoda ma zwracać num1 do potęgi num2. Dodatkowo w tablicy operacji ma zapamiętać napis: "num1^num2 equals result".
    root($num1, $num2) – metoda ma wyliczyć pierwiastek num2 stopnia z num1. Dodatkowo w tablicy operacji ma zapamiętać napis: "root num2 of num1 equals result".

Pamiętaj o nastawieniu atrybutów klasy Calculator na protected.
-------------------------------------------------------------------------------------------
Zadanie B2

Stwórz klasę Circle, która ma spełniać następujące wymogi: 1. Dziedziczyć po kształcie. 2. Mieć dodatkowy atrybut promień. 3. Mieć konstruktor przyjmujący zmienne określające wartości x, y, kolor i promień. Konstruktor powinien wypisywać informacje o właśnie stworzonym okręgu. Pamiętaj o sprawdzeniu:

    czy podane zmienne są liczbami (jeżeli nie są, to nastaw oba na 0),
    czy podany kolor jest napisem.
        Mieć destruktor, który wypisuje informacje o niszczonym okręgu.
        Mieć funkcję dostępu (get, set) do promienia.
        Nadpisywać funkcje kształtu (nadpisz tylko te, które tego wymagają).
        Mieć funkcję zwracającą pole powierzchni.
        Mieć funkcję zwracającą obwód.
-------------------------------------------------------------------------------------------
Zadanie B3

Stwórz klasę HourlyEmployee, która ma reprezentować pracownika któremu pracodawca płaci za godziny. Klasa ma spełniać następujące wymogi:

    Dziedziczyć po klasie Employee.
    Mieć dodatkową metodę computePayment($hours) która będzie zwracała kwotę do wypłacenia pracownikowi za ilość wyproacowanych godzin.
-------------------------------------------------------------------------------------------
Zadanie B4

Stwórz klasę SalariedEmployee, która ma reprezentować pracownika z którym pracodawca ma umowę miesięczną. Klasa ma spełniać następujące wymogi:

    Dziedziczyć po klasie Employee.
    Mieć dodatkową metodę computePayment() która będzie zwracała kwotę do wypłacenia pracownikowi za miesiąć (dla uroszczenia możemy założyć że w każdym miesiącu jest 190 godzin pracujących).
-------------------------------------------------------------------------------------------
Zadanie C1 

Do klasy AdvancedCalculator dopisz:

    Statyczny atrybut PI, który będzie miał przypisaną wartość 3.14.
    Statyczną funkcję computeCircleRadius($r) która będzie zwracała pole koła. Ta metoda nie będzie dopisywać obliczeń do tablicy (napisz w komentarzu, dlaczego nie może tego robić).
-------------------------------------------------------------------------------------------
Zadanie C2 

Zmień kalsę BankAccount w taki sposób żeby konstruktor sam nadawał numer konta bankowego. Dla uproszczenia będziemy nadawać kolejne liczby całkowite zaczynając od jedynki. Zeby to zrobić:

    Dodaj do klasy statyczny prywatny atrybut nextAccNumber.
    Nastaw jego wartość na 1.
    Zmodyfikuj konstruktor w taki sposób żeby nie przyjmował numeru konta, tylko przypisywał wartość atrybutu nextAccNumber do swojego atrybutu number, a nastepnie zwiększał nextAccNumber o jeden.

Przetestuj jak generowane są numery twoich kont.
-------------------------------------------------------------------------------------------
Zadanie D1

Napisz obiektowo program, który będzie obsługiwał skanowanie produktów w sklepie.

    Stwórz klasę dla produktów (musi ona zawierać ilość, opis, identyfikator produktu i cenę). Program ma mieć funkcję do nastawiania i zwracania odpowiednich swoich atrybutów. Dodatkowo napisz funkcję która wyliczy łączną kwotę za przedmiot (ilość * cena).
    Napisz klasę Skaner implementującą:
        Dodanie produktu (przez przekazanie obiektu produktu).
        Usunięcie produktu (przez podanie identyfikatora). Jeśli taki produkt nie był wcześniej zeskanowany, to ta funkcja ma nic nie robić.
        Zmianę liczby produktu (poprzez podanie identyfikatora i nowej liczby). Jeśli taki produkt nie był wcześniej zeskanowany, to ta funkcja ma nic nie robić.
        Funkcję drukowania paragonu, która polega na wyświetleniu na stronie wszystkich produktów i łącznej kwoty za wszystkie produkty.

Najlepiej, gdy Skaner trzyma tablicę z produktami jako swój atrybut.

    Zmodyfikuj klasę produktu tak, żeby umożliwiała nadawanie rabatu. Jeżeli kupisz trzy (lub więcej) dowolne produkty, to łączna cena (za te produkty) spada o 20%.

