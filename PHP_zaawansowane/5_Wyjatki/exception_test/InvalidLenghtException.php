<?php

class InvalidLenghtException extends Exception {
    
    public function __construct($message = "", $code = 0, \Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}

// http://php.net/manual/en/class.exception.php
// http://webmaster.helion.pl/index.php/php-obsluga-wyjatkow
// phpinfo();