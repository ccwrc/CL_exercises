<?php

// var_dump(filter_has_var(INPUT_POST, "var"));

//echo "poprawny url <br/>";
//var_dump(filter_var('http://bzdziagwa.pl', FILTER_VALIDATE_URL)); //zwrot string z adresem
//echo "<br/> niepoprawny url <br/>";
//var_dump(filter_var('htzdziagwapl', FILTER_VALIDATE_URL)); //zwrot false

//echo "poprawny mail <br/>";
//var_dump(filter_var('ccwrc@gmail.elo', FILTER_VALIDATE_EMAIL)); //zwrot string z adresem
//echo "<br/> niepoprawny mail <br/>";
//var_dump(filter_var('hsdsdapl', FILTER_VALIDATE_EMAIL)); //zwrot false

var_dump(filter_input(INPUT_POST, 'var',FILTER_SANITIZE_ENCODED));
// input: <script>bla</script>
// po filtracji: %3Cscript%3Ebla%3C%2Fscript%3E

// http://php.net/manual/en/filter.filters.php
// http://php.net/manual/en/book.filter.php

echo "<br/>rzutowanie<br/>";
var_dump((bool)filter_var('email@bla.com', FILTER_VALIDATE_EMAIL));

?>

<html>
    
    <form method="POST" action="">
        <input name="var" type="text"/>
        <input type="submit"/>
    </form>
    
</html>
