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







//var id = setInterval(function() {
//    console.log('jestem wywoływana co dwie sekundy');
//}, 2000
//)
//
//
//clearInterval(id)
