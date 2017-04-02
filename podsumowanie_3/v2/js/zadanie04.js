/* Zadanie 4
 Za pomocą JavaScript lub jQuery dopisz event do formularza. Event ma reagować na jego 
 wysłanie. Po wciśnięciu przycisku submit funkcja eventu powinna:
 
 1. Zapobiegać przeładowaniu strony.
 2. Sprawdzić, czy wartość pola Numer domu jest liczbą. Jeżeli warunek nie jest spełniony
 odpowiednia wiadomość powinna być pokazana w divie o klasie error_message.
 3. Sprawdzić, czy wartość pola Kod pocztowy składa się dokładnie z sześciu znaków 
 (a trzeci z nich to nazk -). Jeżeli warunek nie jest spełniony odpowiednia wiadomość 
 powinna być pokazana w divie o klasie error_message.
 4. Sprawdzić, czy zaznaczony jest checkbox "Akceptuję warunki". Jeżeli warunek nie 
 jest spełniony odpowiednia wiadomość powinna być pokazana w divie o klasie error_message.
 5. Jeżeli wszystkie warunki są spełnione, w konsoli wyświetl wszystkie informacje z 
 formularza, a w divie o klasie success_message wyświetl informację o tym, że 
 rejestracja się udała.
 */

document.addEventListener("DOMContentLoaded", function () {

    var allInputs = document.querySelectorAll("input");

    var nameSurname = allInputs[0];
    var street = allInputs[1];
    var houseNumber = allInputs[2];
    var postCode = allInputs[3];
    var checkbox = allInputs[4];
    var submitButton = allInputs[5];
    var isPassVariable = true;
    var divError = document.querySelector(".error_message");
    var divSuccess = document.querySelector(".success_message");

    submitButton.addEventListener("click", function (e) {
        e.preventDefault();

        if (isNaN(houseNumber.value)) {
            isPassVariable = false;
            divError.innerText = "numer domu nie jest liczbą";
        }

        if ((postCode.value.length !== 6) || (postCode.value.charAt(2) !== "-")) {
            isPassVariable = false;
            divError.innerText = "zły format kodu pocztowego";
        }

        if (!checkbox.checked) {
            isPassVariable = false;
            divError.innerText = "nie zaznaczyłeś zgody";
        }

        if (isPassVariable) {
            divSuccess.innerText = "rejestracja się udała";
            console.log(nameSurname.value);
            console.log(street.value);
            console.log(houseNumber.value);
            console.log(postCode.value);
        }
    });

});