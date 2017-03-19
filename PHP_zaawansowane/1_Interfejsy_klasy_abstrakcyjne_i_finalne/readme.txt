PHP Zaawansowane – zadania
Interfejsy, klasy abstrakcyjne i finalne

Każde zadanie rozwiąż w osobnym pliku:

    zadanie01.php,
    zadanie02.php,
    ...i tak dalej.
-------------------------------------------------------------
Zadanie 1

Stwórz abstrakcyjną klasę User mającą:

    Atrybuty username i password (zastanów się, jaki powinny mieć poziom dostępu).
    Abstrakcyjną metodę checkLogin przyjmującą jako argumenty:

    login,
    hasło.

    Abstrakcyjną metodę setLogin przyjmującą jako argument:

    login.

    Abstrakcyjną metodę: setPassword, przyjmującą jako argument:

    hasło.

    Publiczną finalną metodę login przyjmującą jako argumenty:

    username,
    password.
    Metoda login sprawdza hasło za pomocą metody checkLogin.

Stwórz dwie klasy Client i Admin będące rozszerzeniami klasy User, w których zaimplementujesz metody abstrakcyjne.

W klasie Admin logowanie powinno spełniać następujące wymagania:

    Użytkownik podał prawidłowy login.
    Hasło miało minimum dziesięć znaków i było prawidłowe (warunek długości hasła sprawdź w metodzie setPassword)
    użytkownik miał ustalony adres IP 192.168.33.22.

W klasie Client logowanie powinno wymagać, aby:

    Użytkownik podał prawidłowy login.
    Hasło miało minimum osiem znaków i było prawidłowe (warunek długości hasła sprawdź w metodzie setPassword).

Stwórz obiekty każdej z klas i ustaw loginy oraz hasła. Sprawdź, czy logowanie działa. Logowanie powinno wymagać prawidłowego hasła i po trzech nieudanych próbach konto powinno być blokowane.
----------------------------------------------------------------
Zadanie 2

Stwórz klasę UserSet reprezentującą zbiór użytkowników klasy Client. Dla nowo stworzonej klasy zaimplementuj metodę add przyjmującą jako argument obiekt klasy Client. Zaimplementuj dla tej klasy interfejs Iterator, który spowoduje wyświetlenie loginów i haseł kolejnych użytkowników. Zaimplementuj metodę checkLogin przyjmującą jako argument hasło i zwracającą wszystkich użytkowników mogących się zalogować danym hasłem – wykorzystaj pętlę foreach.

----------------------------------------------------------------

Zadanie 3

Zapisz poszczególne klasy w różnych plikach i wykorzystaj mechanizm autoload do ładowania tych klas.

Dodaj do klasy UserSet funkcję przyjmującą jako argument następującą tablicę dwuwymiarową:

array('username' => '', 'password' => '')

Funkcja ma ustawiać hasła przekazane w argumencie.







