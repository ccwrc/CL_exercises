Zadania rozwiąż w odpowiednich plikach js. Nie zmieniaj nic w plikach HTML.

--------------------------------------------------------------

Zadanie 1

Stwórz klasę User w JavaScript, która będzie miała:

    Konstruktor przyjmujący nazwę, mail i opis.
    Funkcję (dodaną poprzez prototyp) welcomeUser, która wyświetli w konsoli przywitanie.

Stwórz obiekt tej klasy i dopisz do niego (tylko i wyłącznie do tego stworzonego obiektu) dodatkową metodę sayGoodbye. Metoda ta powinna wypisać pożegnanie w konsoli.
--------------------------------------------------------------
Zadanie 2

Wykonaj następujące polecenia:

    Znajdź wszystkie elementy o klasie sample_class i wypisz w konsoli ich tagi.
    Znajdź element o id sample_id i wypisz w konsoli jego wszystkie klasy.
    Znajdź wszystkie elementy listy znajdujące się w elemencie o klasie sample_class_2 i wypisz znajdujący się w nich tekst.
    Znajdź wszystkie linki i wypisz adresy, na które wskazują.
    Znajdź element o klasie sample_class_3 i wypisz w konsoli tagi wszystkich jego dzieci.

Korzystaj z JavaScriptu lub jQuery.
---------------------------------------------------------------
Zadanie 3

Do wszystkich guzików znajdujących się na stronie dopisz event, który po naciśnięciu spowoduje, że na divie pokaże się tekst trzymany w data-text. Korzystaj z JavaScriptu lub jQuery.
---------------------------------------------------------------
Zadanie 4

Do formularza dopisz event reagujący na jego wysłanie. Po wciśnięciu przycisku submit funkcja eventu powinna:

    Zapobiegać przeładowaniu strony.
    Sprawdzić, czy długość danych w polu Imię jest dłuższa niż pięć znaków. Jeżeli warunek nie jest spełniony, odpowiednia wiadomość powinna być pokazana w divie o klasie error_message,
    Sprawdzić, czy wartości pól Hasło i Hasło2 są identyczne. Jeżeli warunek nie jest spełniony, odpowiednia wiadomość powinna być pokazana w divie o klasieerror_message.
    Sprawdzić, czy zaznaczony jest checkbox "Akceptuję warunki". Jeżeli warunek nie jest spełniony, odpowiednia wiadomość powinna być pokazana w divie o klasie error_message.
    Jeżeli wszystkie warunki są spełnione, w konsoli wyświetl wszystkie informacje z formularza, a w divie o klasie success_message wyświetl informację o tym, że rejestracja się udała.

Korzystaj z JavaScriptu lub jQuery.
