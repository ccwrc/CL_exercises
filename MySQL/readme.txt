----------------------------część 1-----------------------------------------------------------------------------------------

Zadanie A1 
Stwórz nową bazę danych o nazwie exercises_db. Następnie napisz skrypt PHP, który stworzy połączenie do tej bazy danych.

----------------------------------------------------------------------
Zadanie A2 
W bazie danych o nazwie exercises_db stwórz następujące tabele:

    Product:
        id: int
        name: string
        description: string
        price: float(5,2)
    Order:
        id:int
        description: string
    Client:
        id: int
        name: string
        surname: string
----------------------------------------------------------------------
Zadanie A3

Stwórz nową bazę danych o nazwie cinemas_db. Kod MySQL zapisz jako komentarz. Następnie napisz skrypt PHP, który stworzy połączenie do tej bazy danych.
----------------------------------------------------------------------
Zadanie A4

W bazie danych o nazwie cinemas_db stwórz następujące tabele:

    Kino:
        id: int
        name: string
        address: string
    Film:
        id: int
        name: string
        opis: string
    Bilet:
        id: int
        ilość: int
        cena: float

    Płatność:
        id: int
        typ: string
        data: date

    Załóż odpowiednie atrybuty na pola (np. każde id powinno być kluczem głównym, być automatycznie numerowane).
    Napisz odpowiednie zapytania SQL, używając phpMyAdmin (lub konsoli).
    Pamiętaj o stworzeniu i zamknięciu połączenia.
    Jeżeli tabela już istnieje, to nie da się jej stworzyć.
----------------------------------------------------------------------

Zadanie B1 

Napisz zapytania SQL, żeby wypełnić każdą tabelę w bazie danych o nazwie exercises_db co najmniej kilkoma wpisami. Napisz formularz, który będzie dodawał nowe produkty do bazy danych.
----------------------------------------------------------------------
Zadanie B2 

Napisz stronę, która wyświetli wszystkie produkty znajdujące się w bazie danych o nazwie exercises_db.
----------------------------------------------------------------------
Zadanie B3

Napisz zapytania SQL, żeby wypełnić każdą tabelę w bazie danych o nazwie cinemas_db co najmniej kilkoma wpisami (dodaj je jako komentarz na górze pliku PHP).

    W pliku zadanieB3.php jest formularz służący do tworzenia nowych wpisów w tablicach. Przeanalizuj kod HTML.
    Napisz kod PHP, który będzie wkładał przesyłane informacje do odpowiednich tabel w MySQL. Zauważ, że możesz rozróżniać, który formularz został wysłany, dzięki temu że pola submit o nazwie submit mają różne wartości dla każdego formularza (hint: użyj switch).

Przeprowadź też dodatkową walidację danych:

    Dla Filmu rating musi być w zakresie od 0.00 do 10.00.
    Dla Biletu cena musi być większa niż 0.
    Dla Płatności typ musi być jednym z podanych napisów:
        Karta,
        Gotówka,
        Przelew.
----------------------------------------------------------------------
Zadanie B4

Napisz zapytania SQL, które:

    Wybiorą wszystkie filmy na literę W.
    Wybiorą wszystkie bilety, których cena jest większa niż 15.30.
    Wybiorą wszystkie bilety, których ilość (liczba) jest większa niż trzy.
    Wybiorą wszystkie filmy, które mają rating większy niż 6.5.

Wszystkie zapytania dodaj do pliku php jako komentarz.

Napisz skrypt, który wyświetli na stronie wszystkie filmy, kina, bilety i płatności.
----------------------------------------------------------------------
Zadanie C1 
Napisz stronę, która usunie produkt o podanym id (id powinno być przekazane do strony za pomocą metody GET). Strona powinna wyświetać informacje o usunięciu produktu.
----------------------------------------------------------------------
Zadanie C2 
Napisz stronę, która usunie film/kino/płatnośc/bilet o podanym id (zarówno informacje z której tabeli jak i id powinno być przekazane do strony za pomocą metody GET). Strona powinna wyświetlać informacje o usunięciu wpisu z tabeli.
----------------------------------------------------------------------
Zadanie D1 

Napisz zapytanie, które usunie:

    wszystkie produkty, które zaczynają się na literę A,
    Wszystkie produkty z ceną większą od 6.

Wszystkie zapytania dodaj do pliku php jako komentarz.

Do skryptu z zadania B2. dopisz link (widoczny przy każdym elemencie wczytanym z bazy danych), który usunie ten wpis z bazy. Zrób to na zasadzie przesyłania GET-em do innego pliku nazwy tablicy i id elementu, który chcesz usunąć.
----------------------------------------------------------------------
Zadanie D2

Napisz zapytanie, które usunie:

    wszystkie kina, których ostatnia litera nazwy to Z,
    Wszystkie płatności starsze niż pięć dni.

Wszystkie zapytania dodaj do pliku php jako komentarz.

Do skryptu z zadania B4. dopisz link (widoczny przy każdym elemencie wczytanym z bazy danych), który usunie ten wpis z bazy. Zrób to na zasadzie przesyłania GET-em do innego pliku nazwy tablicy i id elementu, który chcesz usunąć.
----------------------------------------------------------------------
Zadanie D3

Dodaj do tabeli Film kolumnę trzymającą rating danego filmu (wartość numeryczna z dwoma miejscami po przecinku).

----------------------------------------------------------------------
Zadanie D4 

Stwórz miniportal, w którym:
    Możemy dodać/usuwać kina, filmy, bilety i płatności.
    Możemy wyświetlać wszystkie kina, wyszukiwać je po nazwie.
    Możemy wyświetlać wszystkie filmy, wyszukiwać je po nazwie lub ratingu.
    Możemy wyświetlać wszystkie płatności, wyszukiwać je po dacie (uwzględnij wyszukiwanie starszych niż/nowszych niż/z danego zakresu/z danej daty).

----------------------------------część 2----------------------------------------------------------------------------------
Zadanie E1

Stwórz nową tabelę UserAddress zawierającą:

    city: string
    street: string
    house_nr: string

Tabela UserAddress ma być połączona relacją jeden do jednego z tabelą Users. Napisz kilka zapytań SQL, które wprowadzą adresy dla istniejących już użytkowników.
-----------------------------------------------------------------------
Zadanie E2 – import bazy danych

Jeżeli nie masz poprzedniej bazy danych albo masz ją niekompletną, to usuń ją i stwórz nową bazę danych o nazwie cinema_db. Następnie zaimportuj do niej dane z pliku kino.sql. Są to tabele powypełniane dużą ilością danych. Takie jak poprzednio, brakuje tylko tabeli płatności.
-----------------------------------------------------------------------
Zadanie E3

Stwórz tabelę do płatności. Ma mieć takie same dane jak w poprzednich zadaniach, ale z tabelą Bilety ma być powiązana relacją jeden do jednego (wpłynie to na kolumnę id). Relacja między biletem a płatnością jest następująca: bilet ma 1 lub 0 płatności (jest wtedy nieopłacony) – płatność musi być przypisana do biletu.

Napisz stronę, na której można kupić bilet i wybrać sposób płatności (może go nie być). Następnie napisz stronę, na której możemy pokazać wszystkie bilety opłacona za pomocą:

    karty,
    gotówki,
    przelewu,
    nieopłacone (czyli takie, które nie mają płatności w systemie).

Najpierw przetestuj zapytania SQL w konsoli lub panelu administracyjnym, dopiero potem napisz kod PHP.
-----------------------------------------------------------------------
Zadanie F1 
Stwórz nową tabelę Opinions zawierającą:

    description: string

Tabela Opinions ma być połączona z tabelą Products relacją jeden do wielu (produkt ma wiele opinii, opinia jest przypisana do jednego produktu). Napisz kilka zapytań, które dodadzą opinie do istniejących produktów. Napisz stronę, na której wyświetlają się wszystkie produkty. Pod każdym produktem mają wyświetlić się opinie do niego.
-----------------------------------------------------------------------
Zadanie F2

Połącz tabele Seanse i Bilety za pomocą relacji wiele do jednego (na seans może być sprzedanych wiele biletów, jeden bilet może być tylko na jeden seans).

Napisz stronę, na której możemy kupić bilet na wybrany seans. Seanse mają być wybierane z listy drop-down (użyj do tego tagu <select>). W tym celu wczytaj z bazy danych wszystkie dostępne seanse i pętlą for wygeneruj option do formularza.
Napisz stronę, na której wyświetlamy dane z biletu (ID seansu, nazwa filmu, nazwa kina, cena biletu).

Najpierw przetestuj zapytania SQL w konsoli lub panelu administracyjnym, a następnie pisz kod PHP.
-----------------------------------------------------------------------
Zadanie G1 

Stwórz nową tabelę Opinions zawierającą:

    description: string

Tabela Opinions ma być połączona z tabelą Products relacją jeden do wielu (produkt ma wiele opinii, opinia jest przypisana do jednego produktu). Napisz kilka zapytań, które dodadzą opinie do istniejących produktów. Napisz stronę, na której wyświetlają się wszystkie produkty. Pod każdym produktem mają wyświetlić się opinie do niego.
-----------------------------------------------------------------------
Zadanie G2

Połącz tabele Products i Orders relacją wiele do wielu. Napisz kilka zapytań, które połączą produkty z zamówieniami.

Napisz stronę, na której będą widoczne:

    wszystkie zamówienia,
    wszystkie produkty należące do zamówienia (pod spodem).

Napisz stronę, na której będą widoczne:

    wszystkie produkty,
    zamówienia, w których ten produkt się pojawił (pod spodem).
-----------------------------------------------------------------------
Zadanie G3 – relacja wiele do wielu

Połącz tabele Kina i Filmy poprzez relację wiele do wielu (film może być wyświetlany w wielu kinach, kino może mieć wiele filmów). Dodatkowo stworzoną tabelę nazwij Seans. Następnie:

    Napisz stronę, na której można stworzyć nowy seans.
    Napisz stronę, na której można wybrać wszystkie kina mające w repertuarze dany film.
    Napisz stronę, na której wypisane są wszystkie filmy wyświetlane w danym kinie.

Pamiętaj, żeby najpierw przetestować zapytania SQL w konsoli lub panelu administracyjnym, dopiero potem pisać kod PHP.
-----------------------------------------------------------------------
Zadanie G4

Stwórz aplikację, na której można:

    zobaczyć wszystkie filmy (w stronie filmu zobaczyć opis, rating + listę kin, która go wyświetla),
    zobaczyć wszystkie kina (na stronie kina wypisz wszystkie filmy + seanse w tym kinie),
    kupić bilet na dany seans,
    zapłacić za bilet.

Stwórz panel administracyjny dla sieci kin. Powinna w nim być możliwość dodawania kin, filmów, seansów, zarządzania biletami (sprawdzanie płatności itp).

