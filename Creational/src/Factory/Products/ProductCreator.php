<?php


namespace Creational\Factory\Products;


class ProductCreator {

  public static function creator(string $name, int $price) {
    return new Product($name,$price);
  }

}