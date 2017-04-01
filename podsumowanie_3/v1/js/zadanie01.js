/* Zadanie 1
 Stwórz klasę User w JavaScript, która będzie miała:
 
 Konstruktor przyjmujący nazwę, mail i opis.
 Funkcję (dodaną poprzez prototyp) welcomeUser, która wyświetli w konsoli przywitanie.
 
 Stwórz obiekt tej klasy i dopisz do niego (tylko i wyłącznie do tego stworzonego obiektu) 
 dodatkową metodę sayGoodbye. Metoda ta powinna wypisać pożegnanie w konsoli. */

document.addEventListener("DOMContentLoaded", function () {

    var User = function (name, mail, description) {
        this.name = name;
        this.mail = mail;
        this.description = description;
    };

    User.prototype.welcomeUser = function () {
        console.log("Witaj " + this.name);
    };

    var funky = new User("koval", "bb@bb.bb", "zwykly opis");
    funky.welcomeUser();

    User.prototype.sayGoodbye = function () {
        console.log("Żegnaj " + this.name);
    };
    funky.sayGoodbye();

});