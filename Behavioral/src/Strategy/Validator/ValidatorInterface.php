<?php


namespace Behavioral\Strategy\Validator;


interface ValidatorInterface {

  public function __construct($value, string $name);

  public function validate(): bool;
}