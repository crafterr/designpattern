<?php


namespace Creational\Factory\Products;


class ModificatorCreator {

  public static function creator(string $name,int $price) {
    $product = ProductCreator::creator($name,$price);
    $modificator = new Modificator($product);
    return $modificator;
  }

}