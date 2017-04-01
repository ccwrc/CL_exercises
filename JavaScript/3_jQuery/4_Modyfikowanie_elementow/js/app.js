/* Zadanie 1
 Znajdź w pliku index.html element o klasie people. Stwórz odpowiednią funkcję, wewnątrz 
 której ustaw event click na przycisku dodaj. Po kliknięciu wykonaj następujące czynności:
 
 1. Pobierz do zmiennej wartość wpisaną do pola o id addUser.
 2. Pobierz do zmiennej wartość wpisaną do pola o id age.
 3. Wstaw nowy element na koniec listy, ustaw jej wiek jako atrybut data.
 4. Po każdym wstawieniu elementu wywołaj osobną funkcję, która będzie ustawiała dany kolor 
 dla elementu li w następujący sposób:
 
 zielony dla osób w wieku do 15 lat,
 niebieski dla osób mających od 16 do 40 lat,
 brązowy dla osób mających 41 lat i więcej.  */

$(document).ready(function () {

    function colorThis() {
        $("ul.main").find("li").each(function () {
            var age = parseInt($(this).data("age"));

            if (age < 16) {
                $(this).css("color", "green");
            } else if (age < 41) {
                $(this).css("color", "blue");
            } else {
                $(this).css("color", "brown");
            }
        });
    }

    $('input[type="submit"]').click(function () {
        var addUser = $("input#addUser").prop("value");
        var age = $("input#age").prop("value");
        var newLi = $('<li data-age="' + age + '">' + addUser + '</li>');
        $("ul.main").append(newLi);
        colorThis();
    });





});