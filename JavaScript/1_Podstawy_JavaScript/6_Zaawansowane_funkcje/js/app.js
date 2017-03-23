/* Zadanie 1
Napisz funkcję boilEgg, która jako argument przyjmie czas w sekundach, a jej wywołanie spowoduje, 
że po zadanym czasie na konsoli wyświetli się komunikat "jajko ugotowane". Dodatkowo co 5 sekund, 
podczas gotowania w konsoli wyświetl napis "jajko się gotuje". Przetestuj swoją funkcję dla 30
 sekund (czas gotowania). */

function boilEgg(timeInSeconds) {
    var interval = setInterval(function(){
        console.log("jajko się gotuje");
    }, 5000);
    
    setTimeout(function(){
        console.log("jajko ugotowane");
        clearInterval(interval);
    }, timeInSeconds*1000);
    
};
// boilEgg(30);

/* Zadanie 4
Napisz funkcję, która jako parametry przyjmuje liczby i wyświetla największą z nich. 
Skorzystaj ze zmiennej arguments.

Przykład:
input -> 5, 29, 6, 4, 34, 56, 2, 3
output -> 56  */

function getMax() { 
    var numbersArray = Array.from(arguments);

    numbersArray.sort(function(a, b) {
        return b-a;
    });
    console.log(numbersArray[0]);
}

function getMax2() { // czas wykonywania od 3,21 do 3,29 tak samo ja funkcja wyzej
    var numbersArray = Array.from(arguments);
    var big = numbersArray[0];
    
    for (var i = 0; i < numbersArray.length; i++) {
        if (numbersArray[i] > big) {
            big = numbersArray[i];
        }
    } console.log(big);
}




