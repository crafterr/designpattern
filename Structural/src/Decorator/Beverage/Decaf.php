<?php


namespace Structural\Decorator\Beverage;


class Decaf extends Beverage {


  private $cost = 20;

  public function cost():int {
    return $this->cost;
  }

}