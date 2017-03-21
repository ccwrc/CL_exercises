/**
 * Created by Jacek on 2016-01-11.
 */

/* Zadanie A1
Stwórz funkcję, która zwraca (przez return) sumę trzech liczb.
Liczby powinny być przekazane do funkcji jako argumenty.
Przykład:
input -> 1, 2, 3
output -> 6
 */

function addNumbers(a,b,c) {
   // var result = a + b +c;
   // return result;
   return a + b +c;
}

// ponizej przyklad z tablica argumentow
function addNumbers2() {
   var result = 0;
   for (var i = 0; i < arguments.length; i++) {
   result += arguments[i]; 
   }
   return result;
}

/* Zadanie A2
Napisz funkcję liczącą pole i obwód okręgu. Funkcja przyjmuje promień tej figury geometrycznej
jako argument. Jeśli przekazany argument jest nieodpowiedniego typu, to funkcja ma zwrócić false. */

function poleObwod(r) {
    if (typeof r !== "number") { // jesli r jest rozne od liczby
        return false;  
    }
    
    var pole = Math.PI * Math.pow(r,2);
    var obwod = 2 * Math.PI * r;
    var result = [pole, obwod]; //dzieki temu funkcja zwraca tablice wynikow
    
    return result;
    // return [pole, obwod]; - mniej elegancka opcja
}


/* Zadanie B1
Stwórz funkcję anonimową i przypisz ją do zmiennej. Zadaniem funkcji jest wypisanie dziesięć razy:
 "Gdy piszę kod zawszę i wszędzie używam funkcji oraz nie tworzę zmiennych globalnych". */

var anonim = function() {
    for (var i = 0; i < 10; i++) { // zmienna i ponizej dodana w celu wyswietlania wielu printow
        console.log("Gdy piszę kod zawszę i wszędzie używam funkcji oraz nie tworzę zmiennych globalnych", i);
    }
};


/* Zadanie B2
Napisz funkcję calculateTip(amount, raiting), która będzie przyjmować dwa argumenty:
    kwotę do zapłaty,
    opis słowny obsługi. Jeśli opis jest taki jak zdefiniowano poniżej, funkcja ma zwracać
     kwotę napiwku, jeśli opis jest nieznany – funkcja powinna zwracać napis "Opis nieczytelny".
Opis może przyjmować następujące wartości: "Bardzo dobra obsluga" => 25% napiwku, 
"Dobra obsluga" => 20% napiwku, "Srednia obsluga" =>15% napiwku, "Zla obsluga" => 0% napiwku.
Przykład:
input -> 100, "Bardzo dobra obsluga"
output -> 25
 */

function calculateTip(amount, raiting) {
    switch (raiting) {
        case "Bardzo dobra obsluga": //wrazliwy na wielkosc liter
            console.log(amount * 0.25);
        break;    
        case "Dobra obsluga":
            console.log(amount * 0.2);
        break; 
        case "Srednia obsluga":
            console.log(amount * 0.15);
        break; 
        case "Zla obsluga":
            console.log(0);
        break; 
    default:
        console.log("Opis nieczytelny");
    }
}

calculateTip(200, "Srednia obsluga");