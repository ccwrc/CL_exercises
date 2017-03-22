/* Zadanie A2
Napisz dwie funkcje add(array) i multiply(array). Obie mają przyjmować tylko jeden argument 
– tablicę. Następnie funkcja add ma zsumować wszystkie liczby znajdujące się w tej 
tablicy (przy pomocy pętli for), a funkcja multiply ma pomnożyć wszystkie liczby 
znajdujące się w tablicy (przy pomocy pętli for). */

function multiply(array) {
    var result = 1;
    for (var i = 0; i < array.length; i++) {
        result *= array[i];
    }
    return result;
}

function add(array) {
    var sumResult = 0;
    for (var i = 0; i < array.length; i++) {
        sumResult += array[i];
    }
    return sumResult;
}

/* Zadanie A3
Napisz funkcję distFromAvarage, która ma przyjmować jako argument tablicę z liczbami. 
Zwracana przez funkcję tablica ma przedstawiać w kazdej komórce różnicę między liczbą z 
danej komórki a średnią wartością tablicy. Dla uproszczenia możesz użyć funkcji z poprzedniego 
zadania. Np.

distFromAvarage([1,2,3,4,5,6,7]) => [3,2,1,0,1,2,3] (średnia z tablicy wejściowej to 4)
distFromAvarage([1,1,1,1]) => [0,0,0,0] (średnia z tablicy wejściowej to 1)
distFromAvarage([2,8,3,7]) => [3,3,2,2] (średnia z tablicy wejściowej to 5) */

function distFromAvarage(array) {
    var avg = add(array) / array.length;
    console.log(avg);
    var diff = [];
    for (var i = 0; i < array.length; i++) {
        var result = Math.abs(array[i] - avg);
        diff.push(result);
    }
    console.log(diff);
}

/* Zadanie B1
Stwórz tablicę z listą swoich ulubionych owoców. Następnie:
    Wypisz pierwszy owoc w konsoli.
    Wypisz ostatni owoc w konsoli (skorzystaj z atrybutu length).
    W pętli wypisz wszystkie owoce (skorzystaj z atrybutu length).  */

var owoce = ["grusz", "jabk", "pomaran", "mandar", "sliwa", "granat"];
function fruits(array) {
    console.log("pierwszy: " + array[0]);
    console.log("ostatni: " + owoce[array.length - 1]);
    for (var i = 0; i < array.length; i++) {
        console.log(array[i]);
    }
}

/* Zadanie B2
Napisz funkcję printTable(array), która przyjmuje tylko jeden parametr – tablicę. Następnie przy
 pomocy pętli for przeiteruj (przejdź) po każdym elemencie i wypisz każdy z nich w konsoli. */

function printTable(array) {
    for (var i = 0; i < array.length; i++) {
        console.log(array[i]);
    }
}

/* Zadanie B3
Napisz funkcję factors, która ma przyjmować tylko jeden argument – liczbę, która musi być większa 
od 0. Funkcja ta ma zwracać tablicę zawierającą wszystkie dzielniki podanej liczby
 (w kolejności malejącej). Jeżeli liczba jest mniejsza lub równa 0, to funkcja ma zwracać 
 pustą tablicę.

factors(2) => [2, 1]
factors(54) => [54, 27, 18, 9, 6, 3, 2, 1]
factors(-4) => []    */

function factors(number) {
    var array = [];
    if (number <= 0) {
        return array;
    }
    for (var i = 1; i <= number; i++) {
        if ((number % i) === 0) {
            array.unshift(i);
        }
    }
    return array;
}

/* B4
 * Napisz funkcję getMissingElement, która ma przyjmować tylko jeden argument – tablicę 
 * zawierającą rosnące liczby całkowite. Funkcja ta ma zwracać brakującą liczbę 
 * (czyli miejsca, w którym tablica skacze o dwa zamiast o jeden). Jeżeli w tablicy nie ma 
 * brakujących liczb, to funkcja ma zwracać null.

getMissingElement([1,2,3,4,5,6,7]) => null
getMissingElement([6,7,8,10,11,12,13,14,15]) => 9
getMissingElement([-4,-3,-2,0,1,2,3,4]]) => -1     */

function getMissingElement(array) { 
    
    for (var i = 0; i < array.length; i++) {
        if (array[i+1]-array[i] > 1 ) {
            return array[i]+1;
        }
    }
    return null;
}
























