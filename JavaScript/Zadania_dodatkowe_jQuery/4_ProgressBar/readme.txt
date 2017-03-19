Progress Bar

Animuj element span w taki sposób, aby zasymulować działanie pasku postępu (progress bar) po kliknięciu w odpowiedni przycisk. 

------------------------------------------------------------
Punkt 1

Zapoznaj się dokładnie z kodem HTML i CSS dodanym do zadania. Pierwszy krok to dokładne przejrzenie pliku index.html i zmodyfikowanie go. Każdy div o klasie progress-bar ma przypisane trzy przyciski. Treść elementu sugeruje Ci, jakie należy ustawić atrybuty elementu button. Użyj atrybutu data z odpowiednimi prefiksami, np. zauważ, że animacja pierwszego paska postępu ma przebiegać do 50% jego szerokości, w związku z tym jeden z atrybutów może mieć prefiks dla data -width. Potrzebujesz jeszcze dwóch atrybutów:

    jednego – przechowującego numer paska postępu,
    drugiego – na kolor.

Plik CSS masz już przygotowany, przyjrzyj się mu również dokładnie.
------------------------------------------------------------
Punkt 2

Przygotuj do pracy plik JavaScript. Dopisz event odpowiedzialny za sprawdzenie, czy DOM został załadowany (pamiętaj, że zadanie masz rozwiązać w jQuery). Sprawdź, czy event działa (np. poprzez wyświetlenie w konsoli napisu "Działa").

Stwórz funkcję odpowiedzialną za animowanie paskami postępu. Pamiętaj o odpowiednich komentarzach i odpowiedniej nazwie dla funkcji.

Znajdź następujące elementy i zapisz je do zmiennych:

    Wszystkie przyciski.
    wszystkie elementy div symulujące paski postępu.

Sprawdź, czy wyszukałeś odpowiednie elementy. Czy ich liczba się zgadza.

Wypisz zmienne w konsoli, żeby upewnić się, czy zawierają poprawne dane.
-------------------------------------------------------------
Punkt 3

Dodaj do wszystkich przycisków event reagujący na kliknięcie (nie używaj pętli – działamy w jQuery). Event póki co ma wyświetlać jakiś tekst w konsoli.
-------------------------------------------------------------
Punkt 4

Zmodyfikuj event tak, żeby po kliknięciu w przycisk:

    Pobrać do zmiennych wszystkie atrybuty data.
    Ustalić, który pasek postępu (div) dotyczy tego przycisku, w który kliknął użytkownik.
    Wiesz już, w co kliknął użytkownik, i który progress-bar chcesz animować. Podstaw pod zmienną element span (wewnątrz diva).
    Znalezionemu paskowi postępu ustaw odpowiednią klasę z kolorem, a także zaanimuj zmianę jego szerokości, na podstawie danych pobranych z data.
-------------------------------------------------------------

Punkt 5

Sprawdź, jak działa Twoja strona. Czy widzisz jakieś problemy? Napisz.















