<?php

class Product
{
    private $id;
    private $productCode;
    private $unitPrice = 0;
    private $stockQty = 0;

    public function __construct($id=null, $code=null, $price=0, $stock=0)
    {
        $this->id = $id;
        $this->productCode = $code;
        if ($price > 0)
        {
            $this->unitPrice = $price;
        }
        if ($stock > 0)
        {
            $this->stockQty = $stock;
        }
    }

    /* Public functions below*/
    public function hasStock()
    {
        if ($this->stockQty > 0)
        {
            return true;
        }
        return false;
    }

    public function sell($quantity){
        $this->stockQty -= $quantity;
    }

    public function buy($quantity){
        $this->stockQty += $quantity;
    }

    public function getPriceForQuantity($quantity){
        return $this->unitPrice * $quantity;
    }


    /* Geters and setters below */
    public function getId()
    {
        return $this->id;
    }

    public function getProductCode()
    {
        return $this->productCode;
    }

    public function setProductCode($product_code)
    {
        $this->product_code = $product_code;
    }

    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }

    public function getStockQty()
    {
        return $this->stockQty;
    }
    
}