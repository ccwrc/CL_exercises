/* Zadanie 1
 Walidacja karty kredytowej. Zadanie polega na walidacji kart kredytowych wpisywanych w 
 formularz na stronie. Walidacja ma następować w czasie rzeczywistym (czyli po wprowadzeniu
 każdej cyfry). Nazwa karty ma być wpisana, jak tylko jest możliwe jej ustalenie.
 Poprawność karty ma być pokazana po wpisaniu odpowiedniej liczby cyfr.
 
 Przyklad
 Zasady rozpoznawania kart:
 Karty Visa zaczynają się od cyfry 4.
 Karty Mastercard zaczynają się od cyfry 5.
 Karty American Express zaczynają się od cyfry 3. Następną cyfrą musi być 4 lub 7.
 Zasady walidacji kart:
 Karty Visa mają od 13 do 16 cyfr.
 Karty Mastercard mają równo 16 cyfr.
 Karty American Express mają równo 15 cyfr.
 Zasady walidacji kart są uproszczone (nie powinniście ich stosować w rzeczywistych projektach). 
 Jeżeli chcesz poznać prawdziwe zasady walidacji kart kredytowych, to są one opisane tutaj:
 https://en.wikipedia.org/wiki/Payment_card_number
 https://en.wikipedia.org/wiki/Luhn_algorithm */

document.addEventListener("DOMContentLoaded", function () {

    document.querySelector("input#card").addEventListener("keyup", function () {
        var cardNumber = document.querySelector("input#card").value;
        var displayCardType = document.querySelector("div#type");
        displayCardType.innerText = "@";

        if (/^\d+$/.test(cardNumber)) { // regex -> /regex/ wyrazenie regularne umieszcz. w slash
            //^-poczatek, \d-cyfra, +-1 lub wiecej razy, $-koniec ciagu znakow
            if (cardNumber.length >= 13) {
                if (cardNumber[0] == 4) {
                    // prawdopodobnie visa
                    if (cardNumber.length <= 16) {
                        displayCardType.innerText = "VISA";
                    } else {
                        console.log("za dużo cyfr dla Visy");
                    }
                } else if (cardNumber[0] == 5) {
                    // prawdopodobnie MC
                    if (cardNumber.length == 16) {
                        displayCardType.innerText = "MC";
                    } else {
                        console.log("niewłaściwa ilość cyfr dla MC");
                    }
                } else if (cardNumber[0] == 3 && (cardNumber[1] == 4 || cardNumber[1] == 7)) {
                    // prawdopodobnie AE
                    if (cardNumber.length == 15) {
                        displayCardType.innerText = "AE";
                    } else {
                        console.log("niewłaściwa ilość cyfr dla AE");
                    }
                } else {
                    console.log("nie można rozpoznać typu karty");
                }
            } else {
                console.log("numer karty za krótki", cardNumber.length);
            }
        } else {
            console.log("wymagane same cyfry");
        }
    });


});
