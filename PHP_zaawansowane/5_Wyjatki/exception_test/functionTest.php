<?php

function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero. Very bad.');
    } else {
        return 1 / $x;
    }
}


try {
    $value = inverse(0);
} catch (Exception $e) {
    echo('Caught exception: ');
} finally {
    echo('First finally.'); // zawsze wywoływany, finally jest w php od 5.5
}


var_dump(inverse(0));
