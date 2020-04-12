<?php


namespace Behavioral\Strategy\Validator;


abstract class Validator implements ValidatorInterface {

  protected $value;
  protected $name;

  public function __construct($value, string $name) {
    $this->value = $value;
    $this->name = $name;
  }
}