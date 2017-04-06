/* Napisz prosty schemat pytań i odpowiedzi. Docelowo odpowiedzi mają być niewidoczne. 
 * Powinny ukazywać się dopiero po kliknięciu na pytanie. */

$(document).ready(function () {

    var allQuestions = $("h1");
    // var allAnswers = $("p"); //zbedne

    allQuestions.on("click", function () {
        $(this).next().slideToggle(500);
    });

});