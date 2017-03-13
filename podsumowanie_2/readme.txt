Zadanie 0 - prework

Wypełnij dane do połączenia z bazą danych wpisując je do odpowiednich zmiennych znajdujących się w pliku config.php. W zadaniach wymagających połączenia do bazy danych korzystaj z tych zmiennych (plik config.php jest już dołączony do plików odpowiedzi). Zaimportuj też dane znajdujące się w pliku exam.sql do swojej bazy danych.

-----------------------------------------------------------------------------------------
Zadanie 1

W bazie danych mamy następujące tablice:

* Users: id : int, username : varchar(60), email : varchar(60), password : varchar(60)
* Messages: id : int, user_id: int, message : text
* Items: id : int, name : varchar(40), description : text, price : real(7,2)
* Orders: id : int, description : text

Napisz następujące zapytania SQL (zapytania mają być wpisane w odpowiednie zmienne znajdujące się w pliku zad1.php):

    Stworzenie tabelki Destinations:

    * Destinations: id : int, user_id : int, address : text, lat : decimal(13,10), long : decimal(13,10)

    Kolumna id ma być kluczem głównym, kolumna user_id ma być kluczem zewnętrznym łączącym tabelkę Destinations z tabelką Users za pomocą relacji wiele do wielu.
    Stworzenie relacji wiele do wielu między tabelami Items a Orders.
    Połączenie zamówienia (tabelka Orders) o id 6 z przedmiotem (tabelka Items) o id: 2.
    Wybranie wszystkich przedmiotów o cenie większej niż 50.
    Włożenie do tabeli Orders nowego zamówienia o opisie "Przykładowy opis 1".
    Usuniecie użytkownika o id 7.
    Wybranie wszystkich użytkowników, którzy maja jakaś wiadomość.
-----------------------------------------------------------------------------------------
Zadanie 2

W pliku zad2_receiver.php napisz kod PHP, który wypisze na stronie wszystkie wiadomości dla użytkownika o id przekazanym przez GET (zmienna o nazwie userId). Strona powinna spełniać nastepujące wymogi:

    Wiadomości powinny zostać wyświetlone w formacie <id wiadomości>, <treść waidomości> po jednej wiadomości w linii.
    W przypadku w którym użytkownik nie posiada żadnej wiadomości w systemie na stronie powinien pojawić się komunikat Brak wiadomości dla danego użytkownika
    W pzypadku wejścia na stronę inną metodą niż GET na stronie powinien wyświetlić się komunikat Proszę wejść na stronę metodą GET.
    W przypadku wejścia na stronę i nie przesłania id strona powinna wyświetlić komunikat Brak przesłania wymaganych danych GET.

W pliku zad2_sender.html znajduje się kilka linków które pomogą Ci przetestować twój kod.

Pamiętaj o poprawnym połączeniu do bazy danych i jego zamknięciu.
-----------------------------------------------------------------------------------------
Zadanie 3

W pliku zad3.php jest formularz służący do dodania nowego przedmiotu do bazy danych. Przeanalizuj go. Następnie w tym samym pliku napisz kod, który:

    W przypadku wejścia na tę stronę metodą POST pobierze informacje przesłane jako: name, description, price. Jeżeli nie zostaną przesłane wszystkie dane to strona powinna wyświetlić komunikat Brak przesłania wymaganych danych POST.
    Wpisze te dane do bazy danych do tabeli Items. Po dodaniu przedmiotu powinien wyświetlić komunikat: Do bazy danych został dodany nowy przedmiot o id <id dodanego przedmiotu>.

Pamiętaj o poprawnym połączeniu do bazy danych i jego zamknięciu.
-----------------------------------------------------------------------------------------
Zadanie 4

W pliku zad4.php znajduje się klasa MyDate. Przeanalizuj dokładnie jej kod a następnie:

    Dopisz konstruktor który stworzy obiekt MyDate nastawiony na 1 Stycznia roku 2000.
    Dopisz publiczne getery i setery dla atrybutów klasy. Setery nie powinny pozwolić na nastawienie danych znajdujących się poza opisanymi zakresami. W przypadku próby takiego zapisu atrybut klasy nie powinien być zmieniony (do sprawdzenia czy przekazana zmienna jest liczbą całkowitą użyj funkcji is_integer).

    Dopisz ciało metody moveForwardByDays($days). Metoda ta powinna przesuwać datę do przodu o podaną ilość dni (do sprawdzenia czy przekazana zmienna jest liczbą całkowitą użyj funkcji is_integer). Jeżeli do metody zostaną przekazane złe dane (np. liczba ujemna, zmienna nie będąca liczbą całkowitą) metoda nie powinna nic robić.

    Pamiętaj o zachowaniu poprawnych wartości zarówno dni, jak i miesięcy i lat.

    Dla uproszczenia możesz założyć że każdy miesiąc ma 31 dni.
----------------------------------------------------------------------------------------

Zadanie 5

Napisz kod PHP klasy VIPUser. Klasa ma spełniać następujące właściwości:

    Dziedziczyć po klasie User (znajduje się w pliku User.php).
    Mieć dodatkowy publiczny atrybut: vipCardNumber.
    Mieć konstruktor, który przyjmuje następujące dane: imię, nazwisko, mail, numer karty VIP. Imię, nazwisko i mail mają być przekazywane do konstruktora klasy nadrzędnej. Konstruktor ma sprawdzać, czy podany numer jest prawidłowy (założenia są opisane w punkcie 4). Jeżeli jest – to go nastawiać, jeżeli nie – to numer ma być nastawiony na null.
    Mieć prywatną metodę checkCard($newNumber) – numer jest prawidłowy, jeżeli jest większy niż 999 i podzielny przez 2. Funkcja ma zwracać wartość logiczną.
    Mieć publiczne funkcję setVipCardNumber($newCardNumber) i getVipCardNumber(). Funkcja set ma nastawiać zmienną vipCardNumber (jeżeli podany nowy numer spełnia założenia z punktu 4, jeżeli nie to ma zostać poprzednia wartość), a funkcja get – ją zwracać.

Nie zmieniaj nic w pliku User.php









