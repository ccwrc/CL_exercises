<?php

/* Napisz funkcję rockPaperScissors(player1, player2) która będzie pobierać dwa napisy 
 * i zwracać infromacje kto wygrał. Poprawne napisy przyjmowane przez funkcjię to:
  papier, nożyce, kamień. Funkcja ma zwracać jeden z 4 napisów: "Gracz 1 wygrał", "Gracz 2 wygrał" 
 * "Remis" lub "Błędne informacje".

Przykład:

input -> "papier", "kamień"
output -> "Gracz 1 wygrał"
 */

function rockPaperScissors($player1, $player2) {
    $permitted = ['papier', 'kamien', 'nozyce'];
    
    if ((in_array($player1, $permitted)) && (in_array($player2, $permitted))) {
        if ($player1 == $player2) {
            return 'Remis';
        }
        switch ($player1) {
            case 'papier':
                if ($player2 == 'nozyce') {
                    return 'Gracz 2 wygrał';
                } else {
                    return 'Gracz 1 wygrał';
                } //break nie jest potrzebny, return przerywa dzialanie
            case 'nozyce':
                if ($player2 == 'kamien') {
                    return 'Gracz 2 wygrał';
                } else {
                    return 'Gracz 1 wygrał';
                }
            case 'kamien':
                if ($player2 == 'papier') {
                    return 'Gracz 2 wygrał';
                } else {
                    return 'Gracz 1 wygrał';
                }
        }
    } else {
        return 'Błędne informacje';
    }
}

