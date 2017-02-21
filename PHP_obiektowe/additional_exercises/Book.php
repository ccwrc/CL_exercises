<?php

include_once 'Bookmark.php';

class Book {
    public $name;
    private $price = 50;
    public $author;
    private $catalogNumber;
    private $num;
    public $bookmark;
    static public $aNum = 0; //zmienne statyczne dodawac na koncu

    // nazwaklasy::$zmienna - spraw. zmiennej statycznej z zewnatrz

    public function __construct($price, $author) {
        $this->bookmark = new Bookmark(1);
        $this->num = self::$aNum;
        self::$aNum++;
        $this->setPrice($price);
        $this->author = $author;
        echo "tworzę nową ksiażkę";
    }

    public function __destruct() {
        echo "niszczę ksiażkę";
    }

    public function setCatalogNumber($catalogNumber) {
        if (is_numeric($catalogNumber) && $catalogNumber > 0) {
            $this->catalogNumber = $catalogNumber;
        } else {
            echo "niepoprawna wartość numeru katalogu";
        }
        return $this;
    }

    public function getCatalogNumber() {
        return $this->catalogNumber;
    }

    public function printInfo() {
        var_dump($this); //szybka do sprawdzenia
    }

    public function setPrice($price) {
        if (is_numeric($price) && $price > 0) {
            $this->price = $price;
        } else {
            echo "cena to zero";
            $this->price = 0;
        }
        return $this;
    }

    public function __clone() {
        if ($this->bookmark != null) {
            $this->bookmark = clone $this->bookmark;
        }
    }

}
