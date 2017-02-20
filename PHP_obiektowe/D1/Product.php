<?php

class Product {
    private $name;
    private $description;
    private $price;
    private $quantity;
    private $id;
    static private $nextId = 0;

    public function __construct($description, $price, $quantity) {
        $this->setDescription($description)  //kolejność łańcucha jest dowolna
                ->setPrice($price)
                ->setQuantity($quantity);
        $this->id = self::$nextId;
        self::$nextId++;
    }

    public function setName($name) {
        if (is_string($name) && $name != '') {
            $this->name = $name;
        }
        return $this; //ret this umozliwia miedzy innymi skorzystanie z lancucha
    }

    public function setDescription($description) {
        if (is_string($description) && $description != '') {
            $this->description = $description;
        }
        return $this;
    }

    public function setPrice($price) {
        if (is_float($price) && $price > 0.01) {
            $this->price = $price;
        } else if (is_numeric($price) && $price > 0.01) {
            $this->price = floatval($price);  //umozliwia wprowadzenie inta
        }       
        return $this;     // ->price;
    }

    public function setQuantity($quantity) {
        if (is_numeric($quantity) && $quantity > 0) {
            $this->quantity = $quantity;
        }
        return $this;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getName() {
        return $this->name;
    }

    public function getId() {
        return $this->id;
    }

    public function getTotalSum() {
        if ($this->quantity >= 3) {
            return (($this->quantity * $this->price) * 0.8);
        } else {
            return ($this->quantity * $this->price);
        }
    }

}
