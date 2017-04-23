<?php

require_once __DIR__ . '/../vendor/autoload.php';

class ProductTest extends PHPUnit_Framework_TestCase {

    public function testConstructNewProduct() {
        $product = new Product();
        $this->assertInstanceOf('Product', $product);
    }

    /* Test sprawdzania ceny za ilość. Ma on stworzyć nowy produkt i sprawdzić, 
     * czy cena za podaną ilość jest prawidłowa. */

    public function testGetPriceForQuantity() {
        $product = new Product(2, 2, 2, 2);
        $this->assertEquals(20, $product->getPriceForQuantity(10));
    }

    public function testGetId() {
        $product = new Product(2, 2, 2, 2);
        $this->assertEquals(2, $product->getId());
    }

    public function testGetProductCode() {
        $product = new Product(2, 2, 2, 2);
        $this->assertEquals(2, $product->getProductCode());
    }

    public function testGetUnitPrice() {
        $product = new Product(2, 2, 2, 2);
        $this->assertEquals(2, $product->getUnitPrice());
    }

    public function testGetStockQty() {
        $product = new Product(2, 2, 2, 2);
        $this->assertEquals(2, $product->getStockQty());
    }

    /* Test sprzedaży i kupna produktu. Ma on tworzyć nowy produkt, następnie sprzedać 
     * jakąś jego ilość i sprawdzić, czy dane się zgadzają. Następnie kupić jakąś 
     * jego ilość i ponownie sprawdzić, czy dane się zgadzają. */

    public function testSellProduct() {
        $product = new Product(2, 2, 2, 200);
        $product->sell(10);
        $this->assertEquals(190, $product->getStockQty());
    }

    public function testBuyProduct() {
        $product = new Product(2, 2, 2, 200);
        $product->buy(10);
        $this->assertEquals(210, $product->getStockQty());
    }

    /* Test, który sprawdzi działanie metody sprawdzającej, czy produkt jest na stanie. */

    public function testHasStock() {
        $product = new Product(2, 2, 2, 200);
        $this->assertTrue($product->hasStock());
    }
    
    /* opcja:    protected $product;
    
    protected function setup() {
        $this->product = new Product();
        $this->product->setProductCode(11);
        $this->product->setUnitPrice(22);
    } */

}
