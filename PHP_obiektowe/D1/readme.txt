
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

