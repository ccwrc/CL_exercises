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
