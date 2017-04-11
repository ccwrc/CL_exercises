<?php

/* Zadanie 2
  Stwórz mechanizm czyszczenia plików w podkatalogach. Pliki starsze niż zadana liczba sekund
 * powinny zostać usunięte. */

// http://php.net/manual/en/function.filectime.php
// preferowany: filectime // bezpieczny: filemtime

function deleteFile($path, $timeInSeconds) {
    if (is_dir($path)) {
        $files = glob($path . "/" . "*");
        // http://php.net/manual/en/function.glob.php
        foreach ($files as $file) {
            if (is_file($file)) {
                if ((time() - filemtime($file)) > $timeInSeconds) {
                    echo "plik" . $file . "usunięty <br/>";
                    unlink($file);
                }
            }
        }
    }
}

// funkcja dziala. zwyczaj robienia backupu tez sie przydal.
// ostrozniej z uzywaniem __DIR__
