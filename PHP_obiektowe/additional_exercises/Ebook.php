<?php

class Ebook extends Book {
    private $sizeInMb = 12;

    public function __construct() {
        parent::__construct();
        echo "tworzę ebooka";
    }

    public function __destruct() {
        echo "niszczę ebooka";  // najpierw wyw. konstr dziecka w constr odwrotnie
        parent::__destruct();
    }

}
