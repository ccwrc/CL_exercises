Zadanie 1

W pliku zad1_sender.html napisz link odnoszący się do strony zad1_receiver.php i przekazujący zmienne metodą GET. Przekazane zmienne są następujące:

    $name = "jacek"
    $mail = "jacek@somemail.com"
    $id = 34

W pliku zad1_receiver.php napisz kod, który odbierze te zmienne i wyświetli je na ekranie.
-----------------------------------------------------------------------------------------------------
Zadanie 2

W pliku zad2_form.html napisz formularz do logowania się. Formularz musi wskazywać na stronę zad2_reciver.php i przesyłać dane metodą POST. Formularz musi mieć następujące pola:

    mail,
    hasło.

W pliku zad2_receiver.php napisz kod, który odbierze te informacje i wyświetli je na ekranie.
-----------------------------------------------------------------------------------------------------
Zadanie 3

 W pliku zad3_create.php napisz kod, który stworzy ciasteczko o nazwie loggedUser (tylko gdy ono nie istnieje) i włoży do niego napis "Jacek". Ciasteczko ma żyć przez następne dwa dni.

W pliku zad3_delete.php napisz kod, który usunie ciasteczko o nazwie loggedUser (tylko gdy ono istnieje).

W pliku zad3_show.php napisz kod, który wyświetli zawartość ciasteczka o nazwie loggedUser. Jeżeli ciasteczko nie istnieje, to powinien wyświetlić komunikat "Ciasteczko loggedUser nie istnieje".
-----------------------------------------------------------------------------------------------------
Zadanie 4

 W pliku zad4_set.php napisz kod, który wstawi do sesji pod klucz someData wartość some text.

W pliku zad4_delete.php napisz kod, który usunie z sesji zawartość znajdującą się pod kluczem someData.

W pliku zad4_show.php napisz kod, który wyświetli z sesji wartość znajdującą się pod kluczem someData.
-----------------------------------------------------------------------------------------------------
Zadanie 5

 Napisz funkcję computeBankInvestment($amount, $percentage, $years) gdzie:

    $amount to liczba reprezentująca kwotę pieniędzy,
    $percentage to liczba reprezentująca procent zwrotu po pierwszym roku,
    $years to liczba lat.

Dla uproszczenia możesz uznać, że wszystkie te zmienne to liczby całkowite.

Funkcja powinna obliczać, ile pieniędzy będziemy mieli na koncie po podanym czasie. Obowiązuje roczna kapitalizacja odsetek. Np.

computeBankInvestment(1000, 5, 1); // => 1050
computeBankInvestment(1000, 5, 2); // => 1102.5
-----------------------------------------------------------------------------------------------------
Zadanie 6

 Napisz funkcję getNextPower($number, $barrier), która zwróci pierwszy wynik potęgowania liczby $number wiekszy niż liczba $barrier. Dla uproszczenia możesz uznać, że obie te zmienne to liczby całkowite. Na przykład dla argumentów 2 i 7 wynikiem jest 8, ponieważ dwa do potęgi trzeciej jest większe niż siedem.

2^1 = 2 // warunek nie jest spełniony
2^2 = 4 // warunek nie jest spełniony
2^3 = 8 // warunek jest spełniony

findNextPower(2, 7) //=> 8
findNextPower(3, 12385); // => 19683
findNextPower(5, 210345) //=> 390625

Nie używaj funkcji wbudowanej w PHP pow(n, m).
------------------------------------------------------------------------------------------------------
Zadanie 7

 Napisz funkcję o nazwie checkIf2DArrayIsRectangle($array), która sprawdzi, czy wszystkie jej rzędy mają taką samą długość. Funkcja powinna zwracać wartość booleanowską (true albo false). Np.

$array1 = array (
    array(  1,  2,  3,  4,  5),
    array( 12, 23, 33, 44, 55),
    array(  4,  7,  3,  3,  6),
    array(  1,  5, 43,  7,  6),
    array(124, 97, 83, 33, 16)
); // Wszystkie rzędy mają tę sam długość (pięć elementów)
checkIf2DArrayIsRectangle($array1); // => true


$array2 = array (
    array( 1,  2,  3,  4,  5,  6), // jeden rząd o innej długości
    array(12, 23, 33, 44, 55),
    array( 4,  7,  3,  3,  6)
);
checkIf2DArrayIsRectangle($array2); // => false

