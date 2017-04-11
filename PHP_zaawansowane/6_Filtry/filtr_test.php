<?php

// var_dump(filter_has_var(INPUT_POST, "var"));

echo "poprawny url <br/>";
var_dump(filter_var('http://bzdziagwa.pl', FILTER_VALIDATE_URL)); //zwrot string z adresem
echo "<br/> niepoprawny url <br/>";
var_dump(filter_var('htzdziagwapl', FILTER_VALIDATE_URL)); //zwrot false

?>

<html>
    
    <form method="POST" action="">
        <input name="var" type="text"/>
        <input type="submit"/>
    </form>
    
</html>
