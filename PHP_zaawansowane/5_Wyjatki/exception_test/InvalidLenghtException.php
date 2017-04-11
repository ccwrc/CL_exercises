<?php

class InvalidLenghtException extends Exception {
    
    public function __construct($message = "", $code = 0, \Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}

// http://php.net/manual/en/class.exception.php
// http://webmaster.helion.pl/index.php/php-obsluga-wyjatkow
// http://phpedia.pl/wiki/Wyj%C4%85tki

 // phpinfo();
 // Loaded Configuration File 	/etc/php/7.0/apache2/php.ini 


/* ...ExampleException dziedziczy po Exception, blok catch łapiący ten typ wyjątku 
 * musi być nad blokiem łapiącym wyjątek Exception, ponieważ wykonywany jest kod z pierwszego 
 * spełniającego kryteria bloku catch jaki zostanie napotkany. Z tego powodu bloki catch 
 * łapiące wyjątki typu Exception powinny być zawsze umieszczane jako ostatnie...   */