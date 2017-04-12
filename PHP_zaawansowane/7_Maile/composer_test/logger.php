<?php

// https://github.com/Seldaek/monolog

// 5.6
// Monolog works with PHP 7.0 or above, use Monolog ^1.0 for PHP 5.3+ support.

require_once "vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

echo("test loggera monolog <br/>");

// utworzenie kanału logowania
$log = new Logger("dowolna nazwa loggera");
$log->pushHandler(new StreamHandler(__DIR__ . "/log/ccwrc.log", Logger::DEBUG));

$log->addInfo("start logowania");
for ($i = 0; $i < 10; $i++) {
    $log->addInfo($i . ". step");
}
$log->addInfo("stop");



