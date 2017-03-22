/* Zadanie A1

Napisz funkcję checkArray przyjmującą jako argument tablicę dwuwymiarową z liczbami całkowitymi. 
Funkcja ma zwrócić nową tablicę, w której kolejnymi elementami będą wartości boolean true lub 
false, zależne od tego, czy każdy element tablicy drugiego wymiaru jest parzysty.

var arr = [
[11, 12],
[42, 2],
[-4, -120],
[0, 0],
[1, 34],
];

output

var arrayCheck = [
false, // bo 11
true,
true,
true,
false, // bo 1
];
---------------
-> input
var arr = [];
arr[0]=[3, 4, 56, 773, 1];
arr[1]=[7, 12, 0, 98, 34, 381];
arr[2]=[12, 66, 96, 54, 10];

output ->
arrayCheck[0] ma mieć wartość false
arrayCheck[1] ma mieć wartość false
arrayCheck[2] ma mieć wartość true */

function checkArray(array) {
    var arrResult = array.map(function (row, index) {
        var result = row.every(function (element) {
            return element % 2 === 0;
        });
        return result;
    });
    return arrResult;
}

/* Zadanie B1
Napisz funkcję print2DArray, która jako argument przyjmuje tablicę dwuwymiarową. 
Następnie funkcja ta ma wypisać w konsoli zawartość tej tablicy. */

function print2DArray(array) {
    for (var i = 0; i < array.length; i++) {
        for (var j = 0; j < array[i].length; j++) {
            console.log(array[i][j]);
        }
    }
}

/* Zadanie B2
Stwórz ręcznie dwuwymiarową tablicę i przetestuj ją na rozwiązaniu zadania B1. */

var blablaArray = [
    [100, 300, 700],
    ['uiuiu', 900, 'w22'],
    ["wpadła", "gruszka", "kompot"]
];

// print2DArray(blablaArray);

/* Zadanie B3
Napisz funkcję create2DArray przyjmującą dwie liczby całkowite (rows i columns). Zadaniem funkcji 
jest zwrócenie tablicy dwuwymiarowej o podanej liczbie rzędów i kolumn. Każda komórka ma być 
wypełniona kolejną liczbą całkowitą. Nastepnie użyj rozwiązania z zadania B1 do wypisania tej 
tablicy w konsoli.
Hint: Użyj petli zagnieżdżonych. */

function create2DArray(rows, columns) {
    var table = [];
    var next = 1;
    for (var i = 0; i < rows; i++) {
        var row = [];
        for (j = 0; j < columns; j++) {
            row[j] = next;
            next++;
        }
        table.push(row);
    }
    return table;
}

 var testTab = create2DArray(9,7);

 print2DArray(testTab);
