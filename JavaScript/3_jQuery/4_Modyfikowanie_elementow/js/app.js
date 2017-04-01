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

    /* Zadanie 2
     Znajdź w pliku index.html element o klasie where-i-am, następnie stwórz odpowiednią funkcję, 
     wewnątrz której stwórz elementy span i dodaj je w odpowiednie miejsca według obrazka poniżej.
     W miejsce trzech kropek wstaw nazwę funkcji, której używasz, np. Jestem tutaj append. Nie 
     zmieniaj kodu HTML. */

    function fourElements() {
        var newSpan1 = $("<span>1.Jestem tutaj append</span>");
        var newSpan2 = $("<span>2.Jestem tutaj before</span>");
        var newSpan3 = $("<span>3.Jestem tutaj before</span>");
        var newSpan4 = $("<span>4.Jestem tutaj after</span>");

        $("section.where-i-am div").append(newSpan1);
        $("section.where-i-am div p").before(newSpan2);
        $("section.where-i-am div").before(newSpan3);
        $("section.where-i-am div").after(newSpan4);
    }

    fourElements();

});