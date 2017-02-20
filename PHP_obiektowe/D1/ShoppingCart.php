<?php

include_once 'Product.php';

class ShoppingCart {
    private $products = [];

    public function addProduct(Product $newProduct) {
        $this->products[$newProduct->getId()] = $newProduct;
        return $this;
    }

    public function removeProduct($productId) {
        if (isset($this->products[$productId])) {
            unset($this->products[$productId]);
        }
        return $this;
    }

    public function changeProductQuantity($productId, $newQuantity) {
        if (isset($this->products[$productId])) {
            // mozna dodac nowa ilosc do starej ilosci  
            //  $quantity = $newQuantity + $this->products[$productId]->getQuantity();
            //  $this->products[$productId] = setQuantity($quantity);
            $this->products[$productId] = setQuantity($newQuantity);
        }
        return $this;
    }

    public function printRecipt() {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            echo "id: " . $product->getId() . "<br/>" .
            "name: " . $product->getName() . "<br/>" .
            "price: " . $product->getPrice() . "<br/>" .
            "quantity: " . $product->getQuantity() . "<br/>" .
            "total sum: " . $product->getTotalSum() . "<br/><br/>";
            $totalPrice += $product->getTotalSum();
        }
        echo "Total price is $totalPrice";
    }

}
