<?php


namespace Structural\Decorator\Beverage;


class Soy extends AddonDecorator {
  protected $cost = 4;

  public function cost():int {
    return $this->getBeverage()->cost() + $this->cost;
  }
}