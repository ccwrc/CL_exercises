/* Zadanie 5
 Na stronie znajduje się formularz, który odsyła do strony http://api.coderslab.pl/showpost.php.
 Napisz walidację tego formularza w taki sposób, żeby wysyłany był tylko i wyłącznie wtedy,
 kiedy spełnione zostaną następujące warunki:
 
 Email zawiera w sobie @.
 Imię jest dłuższe niż pięć znaków.
 Nazwisko jest dłuższe niż pięć znaków.
 Hasło i hasło drugie są identyczne.
 Checkbox musi być zaznaczony.
 
 Warunek dla chętnych. Dodatkowe. Hasło ma mieć co najmniej pięć znaków (w tym co najmniej jedną
 liczbę i jedną literę).
 Zauważ, jak dane wyświetlane są na stronie docelowej (jak ich nazwy są skorelowane z kodem HTML).
 Spróbuj pozmieniać atrybuty name i zobacz, jak się zmieniają wysyłane dane (np. sprawdź, 
 co się stanie, jak dwa inputy mają taką samą nazwę). Uwaga, jest to ważne miejsce 
 współpracy frontendowców z backendowcami.   */

document.addEventListener("DOMContentLoaded", function () {

    var validateCheck = false;
    var submitButton = document.querySelector("button.btn-primary");

    submitButton.addEventListener("click", function (event) {
        var email = document.querySelector("#email").value;
        var name = document.querySelector("#name").value;
        var surname = document.querySelector("#surname").value;
        var pass1 = document.querySelector("#pass1").value;
        var pass2 = document.querySelector("#pass2").value;
        var checkbox = document.querySelector("#agree");

        var validateEmail = false;
        if (/^.*@.*$/.test(email)) {
            validateEmail = true;
        }

        var validateName = false;
        if (name.length > 5) {
            validateName = true;
        }

        var validateSurname = false;
        if (surname.length > 5) {
            validateSurname = true;
        }

        validatePass = false;
        if ((pass1 === pass2) && (/^.*\d+.*$/.test(pass1)) && (/^.*[a-zA-Z]+.*$/.test(pass1)) 
                && (pass1.length >= 5)) {
            validatePass = true;
        }


        if (validateEmail && validateName && validateSurname && validatePass && checkbox.checked) {
            validateCheck = true;
        }

        if (!validateCheck) {
            event.preventDefault();
        }
    });

});