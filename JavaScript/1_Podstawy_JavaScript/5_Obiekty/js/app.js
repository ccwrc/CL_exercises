/* Zadanie 1 
Za pomocą prototypu dodaj metodę upperLower do wbudowanego w JavaScript obiektu String. 
Metoda zamieni podany ciąg znaków tak, że każdy znak nieparzysty w wyrazie będzie zamieniony 
na mała literę, a parzysty – na duża. Jeśli w ciągu występuje spacja, pomiń ją. 
Po rozwiązaniu zadania pomyśl, czy można funkcję zapisać w inny, łatwiejszy sposób.

-> input
var funnyText = "Smiesznie".upperLower();

output ->
sMiEsZnIe

-> input

var funnyTextWithSpace = "Javascript jest super".upperLower();

output ->
jAvAsCrIpT jEsT sUpEr */ 

String.prototype.upperLower = function () {
    var newText = "";
    for (var i = 0; i < this.length; i++) {
        if (i % 2 === 0) {
            newText += this[i].toLowerCase();
        } else  {
            newText += this[i].toUpperCase();
        }
    }
    return newText;
};


