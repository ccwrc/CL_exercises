/* Zadanie 4
 Do formularza dopisz event reagujący na jego wysłanie. Po wciśnięciu przycisku submit funkcja 
 eventu powinna:
 
 1. Zapobiegać przeładowaniu strony.
 2. Sprawdzić, czy długość danych w polu Imię jest dłuższa niż pięć znaków. Jeżeli warunek nie 
 jest spełniony, odpowiednia wiadomość powinna być pokazana w divie o klasie error_message,
 3. Sprawdzić, czy wartości pól Hasło i Hasło2 są identyczne. Jeżeli warunek nie jest spełniony,
 odpowiednia wiadomość powinna być pokazana w divie o klasieerror_message.
 4. Sprawdzić, czy zaznaczony jest checkbox "Akceptuję warunki". Jeżeli warunek nie jest spełniony,
 odpowiednia wiadomość powinna być pokazana w divie o klasie error_message.
 5. Jeżeli wszystkie warunki są spełnione, w konsoli wyświetl wszystkie informacje z formularza,
 a w divie o klasie success_message wyświetl informację o tym, że rejestracja się udała.
 
 Korzystaj z JavaScriptu lub jQuery. */

$(document).ready(function () {

    var name = $("form label input")[0];
    var surname = $("form label input")[1];
    var pass1 = $("form label input")[2];
    var pass2 = $("form label input")[3];
    var inputCheckbox = $("form label input")[4];
    var checkConditions = true;
    var divErrorMessage = $("div.error_message");
    var divSuccessMessage = $("div.success_message");

    $('input[type="submit"]').on("click", function (e) {
        e.preventDefault();

        if (name.value.length <= 5) {
            divErrorMessage.text("warunek nie jest spełniony, powinno byc min. 5 znaków w polu imię");
            checkConditions = false;
        }

        if (pass1.value !== pass2.value) { //nie bylo wymogu, ze nie musza byc puste...
            divErrorMessage.text("hasła nie są identyczne");
            checkConditions = false;
        }

        if (!inputCheckbox.checked) {
            divErrorMessage.text("nie zaakceptowałeś warunków");
            checkConditions = false;
        }

        if (checkConditions === true) {
            console.log(name.value);
            console.log(surname.value);
            console.log(pass1.value);
            console.log(pass2.value);
            divSuccessMessage.text("rejestracja się udała");
        }

    });


});