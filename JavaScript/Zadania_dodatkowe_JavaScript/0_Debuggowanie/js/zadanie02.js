function doSomethingElse() {
    var wheather = "sunny";
    var things = "";

    switch (wheather) {
        case "sunny":
        {
            things = "hat";
        }
        case "windy":
        {
            things = "jacket";
        }
        case "rainy":
        {
            things = "umbrella";
        }
        case "frostily" :
        {
            things = "coat";
        }
    }

    var temp = 0;

    if (temp < -10) {
        things += ' gloves';
    } else if (temp < 0) {
        things += ' cap';
    } else if (temp < 10) {
        things += ' hat';
    }

    console.log('temperature is: ' + temp);
    console.log('what sould I take: ' + things);

}

doSomethingElse();
