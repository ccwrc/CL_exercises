/* Ta funkcja nie robi nic sensownego.
*/
function doSomething(number){
    var numberOfSlides = number;
    // var slideWidth = 400;
    // var baz;

    var foo = "Galeria ma ";
    console.log(foo + numberOfSlides + ' zdjęcia');

    var naj = "naj ";
    for(var i = 0; i < numberOfSlides - 1; i++) {
      var bar = "Zdjęcie nr. " + i + " lubię " + naj + " bardziej";
      console.log(bar);
      naj += " naj";
    }
}

doSomething(16);
