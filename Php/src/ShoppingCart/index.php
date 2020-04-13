<?php
require __DIR__ . '/../../../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use Php\ShoppingCart\Item;
use Php\ShoppingCart\Cart;

$cart = new Cart();

$tax = '23.00';

$item1 = new Item('SKU1', 'Item 1', '100.00', $tax);
$item2 = new Item('SKU2', 'Item 2', '200.00', $tax);
$item3 = new Item('SKU3', 'Item 3', '300.00', $tax);

$cart->addItem($item1);
$cart->addItem($item2);
$cart->addItem($item3);

foreach ($cart as $c) {
  /**
   * @var Item $c
   */
 // dump($c['item']->getName());
}

//dump($cart->total());

$price = bcmul(10,2,2);

dump($price);

$sum = bcadd($sum, $price, 2);

