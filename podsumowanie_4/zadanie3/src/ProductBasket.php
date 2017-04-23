<?php


class ProductBasket{
    private $products;

    public function __construct(){
        $this->products = [];
    }

    public function getTotalPrice(){
        $totalPrice = 0;
        foreach($this->products as $product){
            $totalPrice += $product->getStockQty() * $product->getUnitPrice();
        }
        return $totalPrice;
    }
}
