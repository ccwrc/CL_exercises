/* Zadanie A1
Stwórz funkcję, która zwraca (przez return) sumę trzech liczb. Liczby powinny być przekazane 
do funkcji jako argumenty.
Przykład:
input -> 1, 2, 3
output -> 6     */

function sum(a,b,c) {
    return a + b + c;
}

// ponizej przyklad z tablica argumentow
function sum2() {
   var result = 0;
   for (var i = 0; i < arguments.length; i++) {
   result += arguments[i]; 
   }
   return result;
}
// console.log(sum2(2,2,2,2));

/* Zadanie A2
Napisz funkcję liczącą pole i obwód okręgu. Funkcja przyjmuje promień tej figury geometrycznej 
jako argument. Jeśli przekazany argument jest nieodpowiedniego typu, to funkcja ma zwrócić false.*/

function fieldCircuit(r) {
    if (typeof r !== "number") {
        return false;
    }

    var field = Math.PI * Math.pow(r, 2);
    var circuit = 2 * Math.PI * r;
    return [field, circuit];
}
// console.log(fieldCircuit(4));

/* Zadanie B1
Stwórz funkcję anonimową i przypisz ją do zmiennej. Zadaniem funkcji jest wypisanie dziesięć razy: 
"Gdy piszę kod zawszę i wszędzie używam funkcji oraz nie tworzę zmiennych globalnych". */

var anon = function () {
    for (var i = 1; i <= 10; i++) {
        console.log(i + " Gdy piszę kod zawszę i wszędzie używam funkcji oraz nie tworzę zmiennych globalnych");
    }
};
// anon();

/* Zadanie B2
Napisz funkcję calculateTip(amount, raiting), która będzie przyjmować dwa argumenty:
    kwotę do zapłaty,
    opis słowny obsługi. Jeśli opis jest taki jak zdefiniowano poniżej, funkcja ma zwracać kwotę 
    napiwku, jeśli opis jest nieznany – funkcja powinna zwracać napis "Opis nieczytelny".
Opis może przyjmować następujące wartości: "Bardzo dobra obsluga" => 25% napiwku,
 "Dobra obsluga" => 20% napiwku, "Srednia obsluga" =>15% napiwku, "Zla obsluga" => 0% napiwku.

Przykład:
input -> 100, "Bardzo dobra obsluga"
output -> 25     */