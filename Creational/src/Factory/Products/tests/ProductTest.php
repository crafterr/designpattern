<?php


namespace Creational\Factory\Products\tests;
use Creational\Factory\Products\Product;
use Creational\Factory\Products\ProductCreator;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase {
  public function testCanProduct() {
    $this->assertInstanceOf(Product::class, ProductCreator::creator('product','30'));
  }

  public function testIsPriceIsValid() {
    $price = 'adam ma kota';
    $this->expectException(\TypeError::class);
    ProductCreator::creator('name',$price);
  }

  public function testProductHasPrice() {
    $price = 10;
    $product = ProductCreator::creator('Product1',$price);
    $this->assertSame($price,$product->getPrice());
  }

  public function testProductHasName() {
    $name = 'Product1';
    $product = ProductCreator::creator($name,10);
    $this->assertSame($name,$product->getName());
  }

}