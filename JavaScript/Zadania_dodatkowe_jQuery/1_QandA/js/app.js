/* Napisz prosty schemat pytań i odpowiedzi. Docelowo odpowiedzi mają być niewidoczne. 
 * Powinny ukazywać się dopiero po kliknięciu na pytanie. */

$(document).ready(function () {

    var allQuestions = $("h1");
    var allAnswers = $("p");

    allQuestions.on("click", function () {
        console.log("klikniecie w h1");
    });

});