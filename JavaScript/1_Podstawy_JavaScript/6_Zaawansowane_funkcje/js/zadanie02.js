/**Zagnieżdżanie funkcji.
 * Prześledź krok po kroku każdą linijkę kodu. Każdą!
 * Spróbuj napisać komentarze dla każdej z linijek kodu
 * 
 * Zadanie 2
Zajrzyj do pliku zadanie02.js i przetestuj działanie obu funkcji. Dlaczego funkcja o nazwie jeden 
nie ma dostępu do zmiennej o nazwie zmienna2? Aby potwierdzić zrozumienie tematu spróbuj napisać 
komentarz przy każdej z linii kodu.    */


//na koncu deklaracji zabraklo srednika
function jeden() {

    //utworzenie i przypisanie zmiennej lokalnej
    var zmienna1 = 1;

    //Twój komentarz ...
    function dwa() {

        //wywolanie zmiennej widocznej dla funkcji dwa, ktora jest podfunkcja f. jeden
        console.log(zmienna1);

        //utworzenie i przypisanie zmiennej lokalnej (brak widocznosci dla funkcji jeden - nieladnie)
        var zmienna2 = 3;
    }

    //wywolanie funkcji dwa w funkcji jeden
    dwa();

    //brak srednika, brak wczesniejszej deklaracji zmiennej w danym zakresie
    console.log(zmienna2);
};

//brak srednika
jeden();