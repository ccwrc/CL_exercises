function mathInfo() {
    var randomNumber = Math.floor(Math.random() * 100);

    console.log("wylosowana liczba: " + randomNumber);

    // ad1 parzysta/nieparzysta
    if (randomNumber % 2 === 0) {
        console.log("parzysta");
    } else {
        console.log("nieparzysta");
    }

    // ad2 Wszystkie dzielniki liczby, np. dla 10 wyświetli 5, 2, 1 
    // (liczby mają wyświetlić się w jednej linii).
    var dividers = [1];
    for (var i = 2; i <= (randomNumber / 2); i++) {
        if (randomNumber % i === 0) {
            dividers.push(i);
        }
    }

    // foreach tylko do testu
    dividers.forEach(function (element, index, array) {
        console.log(element);
    });

    console.log(dividers);
    console.log("Długość tabeli to: ", dividers.length);

    // ad3 Wyświetli wynik potęgowania liczby, wykładnikiem potęgi ma być reszta
    //  z dzielenia tej liczby przez 5.
    var rest = randomNumber % 5;
    console.log("reszta: " + rest);
    var result = Math.pow(randomNumber, rest);
    console.log("wynik: ", result);

}

//to wywołanie ma spowodować wyświetlenie w konsoli informacji z zadania
mathInfo();
