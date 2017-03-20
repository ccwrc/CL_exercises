Pliki PHP

Każde zadanie rozwiąż w osobnym pliku:

    zadanie01.php,
    zadanie02.php.
-----------------------------------------------------------
Zadanie 1

Stwórz formularz, który umożliwi upload pliku graficznego (np. folder images) i zapisze ten plik w katalogu wybranym według algorytmu:

    Z nazwy pliku stwórz MD5 Hash.
    Na podstawie bieżącej daty wybierz podkatalog, jeżeli nie istnieje – stwórz go,
    Na postawie dwóch pierwszych znaków wybierz podkatalog w tym podkatalogu, jeżeli nie istnieje – stwórz go,
    Na postawie dwóch ostatnich znaków wybierz podkatalog w tym podkatalogu, jeżeli nie istnieje – stwórz go,
    Zapisz plik w ostatnim podkatalogu.

Przykładowa struktura katalogu: 2016-01-03/ad/4a/ccwrc_image.jpg

Stwórz skrypt showImage.php, który umożliwi wyświetlenie tego pliku, ale nie za pomocą HTML i tagu IMG. Poszukaj podpowiedzi w Google/Yandex/itp.
-----------------------------------------------------------
Zadanie 2

Stwórz mechanizm czyszczenia plików w podkatalogach. Pliki starsze niż zadana liczba sekund powinny zostać usunięte.
