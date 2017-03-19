
Zadanie 1

Napisz formularz pobierający:

    imię i nazwisko,
    plik.

Następnie kod zapisuje plik w katalogu ./files, do nazwy pliku dodaje {imię}_{nazwisko}.

Przykładowa nazwa pliku:
raport_october.pdf

Nowa nazwa pliku:
jan_kowalski_raport_october.pdf
--------------------------------------------------------------
Zadanie 2

Opisz, co to są wyjątki i do czego służą. Napisz przykładowy kod rzucający wyjątek klasy Exception, a następnie go obsługuje (łapie). Obsługa wyjątku ma polegać tylko i wyłącznie na wyświetleniu odpowiedniej informacji.
--------------------------------------------------------------
Zadanie 3

W folderze src możesz znaleźć klasę Product. Napisz do niej następujące testy jednostkowe:

    Test do tworzenia produktu. Ma on tworzyć nowy produkt i sprawdzać, czy wszystkie gettery działają poprawnie.
    Test sprzedaży i kupna produktu. Ma on tworzyć nowy produkt, następnie sprzedać jakąś jego ilość i sprawdzić, czy dane się zgadzają. Następnie kupić jakąś jego ilość i ponownie sprawdzić, czy dane się zgadzają.
    Test sprawdzania ceny za ilość. Ma on stworzyć nowy produkt i sprawdzić, czy cena za podaną ilość jest prawidłowa.
    Test, który sprawdzi działanie metody sprawdzającej, czy produkt jest na stanie.

W klasie Produkt oczywiście są błędy – napraw je tak, żeby wszystkie Twoje testy przechodziły na zielono.
--------------------------------------------------------------
Zadanie 4

Napisz formularz, który będzie pobierał od użytkownika jakiś napis. Następnie użytkownik będzie miał możliwość wybrania jednej z opcji:

    Opcja jeden usuwa z napisu wszystkie znaki poza literami, cyframi i spacją, a wynik wypisze na stronie.
    Opcja dwa usuwa z napisu wszystkie znaki poza cyframi, przecinkami, kropkami i spacją, a wynik wypisze na stronie.
    Opcja trzy wyszukuje w napisie część, która jest otoczona nawiasami kwadratowymi i wypisuje ją na stronie.

Użyj wyrażeń regularnych.
--------------------------------------------------------------
Zadanie 5

W folderze src możesz znaleźć klasę ProductBasket. Zmień ją w taki sposób, żeby implementowała dwa interfejsy:

    ArrayAccess – w tym przypadku musisz zagwarantować, żeby w tablicy były tylko obiekty klasy Product.
    Countable.

Napisany kod ma nie generować żadnych warningów!









