<?php

class Workshop implements Countable, ArrayAccess, JsonSerializable {
    private $cars;

    public function __construct() {
        $this->cars = [];
    }

    public function addCar(Car $c) {
        $this->cars[] = $c;
    }

    // Countable interface
    // http://php.net/manual/en/countable.count.php
    // http://php.net/manual/en/class.countable.php
    // http://stackoverflow.com/questions/2297714/how-to-implement-the-countable-interface-in-php    
    public function count() {
        return count($this->cars);
    }

    // ArrayAccess interface
    // http://php.net/manual/en/class.arrayaccess.php
    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->cars[] = $value;
        } else {
            $this->cars[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->cars[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->cars[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->cars[$offset]) ? $this->cars[$offset] : null;
    }

    // JsonSerializable
    // http://php.net/manual/en/jsonserializable.jsonserialize.php
    public function jsonSerialize() {
        return serialize($this->cars);
    }

}
