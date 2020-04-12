<?php


namespace Structural\Decorator\Beverage;


class Expresso extends Beverage {

  private $cost = 10;

  public function cost():int {
    return $this->cost;
  }

}