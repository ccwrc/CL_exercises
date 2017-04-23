<?php

/* Zadanie 5
  W folderze src możesz znaleźć klasę ProductBasket. Zmień ją w taki sposób, żeby implementowała
 *  dwa interfejsy:

  ArrayAccess – w tym przypadku musisz zagwarantować, żeby w tablicy były tylko obiekty
 * klasy Product.
  Countable.

  Napisany kod ma nie generować żadnych warningów! */

class ProductBasket implements Countable, ArrayAccess {
    private $products;

    public function __construct() {
        $this->products = [];
    }

    public function getTotalPrice() {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            $totalPrice += ($product->getStockQty() * $product->getUnitPrice());
        }
        return $totalPrice;
    }

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    // http://php.net/manual/en/class.countable.php
    // implementacja interfejsu countable
    public function count() {
        return count($this->products);
    }

    // http://php.net/manual/en/class.arrayaccess.php
    // implementacja interfejsu arrayaccess 
    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->products[] = $value;
        } else {
            $this->products[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->products[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->products[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->products[$offset]) ? $this->products[$offset] : null;
    }

}
