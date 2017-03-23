/**Funkcje wyższego rzędu.
 * Prześledź krok po kroku każdą linijkę kodu. Każdą!
 * Spróbuj napisać komentarze dla każdej z linijek kodu
 * 
 * Zadanie 3
Zajrzyj do pliku zadanie03.js i przetestuj działanie funkcji sortArray. Aby potwierdzić 
zrozumienie tematu spróbuj napisać komentarz przy każdej z linii kodu.  */


//deklaracja funkcji, ktora nie przyjmuje zadnych argumentow
function sortArray() {

    //deklaracja zmiennej - tablica + jej wypelnienie
    var points = [41, 3, 6, 1, 114, 54, 64];

    //wywolanie na tablicy funkcji sortujacej...
    points.sort(function(a, b) {
        //wg. schematu a-b, czyli rosnaco (b-a byloby malejaco)
        return a-b;
    });

    //zwrot juz posortowanej tablicy
    return points;
}

//zwykle wywolanie funkcji
sortArray();
