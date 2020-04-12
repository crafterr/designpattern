<?php


namespace Creational\Factory\Products;


class Modificator {

  /**
   * @var \Creational\Factory\Products\Product
   */
  private $product;

  public function __construct(Product $product) {
    $this->product = $product;
  }

  public function modify() {
    return 'Product '.$this->product->getName().' zostal zmodyfikowany';
  }
}