/* Zadanie 1
 Palindrom to wyrażenie brzmiące tak samo czytane zarówno od lewej do prawej, jak i od prawej
 do lewej. Napisz funkcję checkPalindrom(string) sprawdzającą, czy dany string jest palindromem.
 
 Np:
 checkPalindrom("Devil lived") // => true
 checkPalindrom("Kamil ślimak") // => true
 checkPalindrom("Czarne kropki") // => false */

function checkPalindrom(string) {
    string = string.toLowerCase().replace(" ", "");
    string2 = string.split('').reverse().join('');
    
    // alt z petla for if(textInLower[i] !== textInLower[textInLower.length - i - 1])
//    if (string === string2) {
//        return true;
//    } else {
//        return false;
//    }
    // krocej
    return string === string2;
}

console.log(checkPalindrom("Devil lived"));

