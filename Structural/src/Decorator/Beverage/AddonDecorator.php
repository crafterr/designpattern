<?php


namespace Structural\Decorator\Beverage;


abstract class AddonDecorator extends Beverage {


  private $beverage;

  public function __construct(Beverage $beverage) {
    $this->beverage = $beverage;
  }

  public function getBeverage(): Beverage {
    return $this->beverage;
  }

}