<?php

function loader1($className) {
    if (file_exists($className . ".php")) {
        require_once $className . ".php";
    }
}

function loader2($className) {
    if (file_exists("class/" . $className . ".php")) {
        require_once "class/" . $className . ".php";
    }
}

spl_autoload_register("loader1"); //w odroznieniu do __autoload spl moze byc wiele
spl_autoload_register("loader2");

//$admin222 = new Admin();
//var_dump($admin222);
//$cli = new Client();
//var_dump($cli);
