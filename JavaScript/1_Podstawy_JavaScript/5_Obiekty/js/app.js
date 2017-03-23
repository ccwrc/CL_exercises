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

// ponizsza wersja zlicza spacje jako znaki
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

// a ponizsza wersja radzi sobie ze spacjami
String.prototype.upperLowerNew = function () {
    var newText = "";
    var count = 0;
    for (var i = 0; i < this.length; i++) {
        if (this[i] === " ") {
            count = 1;
        }
        if (count % 2 === 0) {
            newText += this[i].toLowerCase();
            count++;
        } else {
            newText += this[i].toUpperCase();
            count++;
        }
    }
    return newText;
};

/* Zadanie 2
Stwórz obiekt samochód, utwórz dla niego odpowiednie atrybuty i metody.
Atrybuty:

    markę,
    kolor,
    liczbę przejechanych kilometrów (na początku 0).

Metody:

    printCarinfo() – metoda powinna wypisywać informacje o samochodzie (kolor, markę i 
    liczbę przejechanych kilometrów).
    drive(km) – która dodaje do przejechanych kilometrów podaną wartość. Użyj słowa kluczowego 
    this, żeby odwołać się do obiektu w środku metody. */

var Car = function(color, brand) {
    this.color = color;
    this.brand = brand;
    this.course = 0;
    
    Car.prototype.printCarInfo = function() {
        console.log("kolor: " + this.color);
        console.log("marka: " + this.brand);
        console.log("przebieg: " + this.course);
    };
    
    Car.prototype.drive = function(km) {
        this.course += km;
    };
};

// ponizej tylko test
var demoCar = { 
    color: "szary",
    brand: "zwykła marka",
    course: 300,
    
    printCarInfo: function() {
        console.log(this.color);
        console.log(this.brand);
        console.log(this.course);
    },
    
    drive: function(km) {
        this.course += km;
    }
};

/* Zadanie 3
Do obiektu samochód z zadania 2. dodaj tablicę z listą dat przeglądów (niech będą to 
zwykłe napisy). Dodaj ten nowy atrybut poza ciałem obiektu. Dodaj też następujące metody:

    metodę dodającą wpis do tej tablicy,
    metodę wyświetlającą wszystkie przeglądy samochodu.

Użyj słowa kluczowego this, żeby odwołać się do obiektu w środku metody. */

Car.prototype.reviewDate = [];

Car.prototype.addReviewDate = function(date) {
    this.reviewDate.push(date);
};

Car.prototype.showAllReviews = function() {
    for (var i = 0; i < this.reviewDate.length; i++) {
        console.log(this.reviewDate[i]);
    }
};

/* Zadanie 5
Stwórz konstruktor dla obiektów Rectangle, który będzie przyjmować informację na temat długości
 i szerokości nowo stworzonej figury. Następnie przy pomocy prototypu klasy dodaj do niej 
 następujące metody:

    getArea() – metoda ma zwracać pole powierzchni,
    getPerimiter() – metoda ma zwracać obwód.

Stwórz kilka obiektów i zobacz, czy metody działają tak jak powinny. */

var Rectangle = function(length, width) {
    this.length = length;
    this.width = width;
    
    Rectangle.prototype.getArea = function() {
        return (this.length * this.width);
    };
    
    Rectangle.prototype.getPermimeter = function() {
        return (2*this.length + 2*this.width);
    };
};
//var prosto = new Rectangle(2,3);
//console.log(prosto);
//console.log(prosto.getArea());
//console.log(prosto.getPermimeter());



















