<?php


namespace Structural\Decorator\Beverage;


class Caramel extends AddonDecorator {

  protected $cost = 2;

  public function cost():int {
    return $this->getBeverage()->cost() + $this->cost;
  }


}