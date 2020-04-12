<?php


namespace Behavioral\Strategy\Validator;


class Numeric extends Validator {

  public function validate(): bool {
    if (!is_numeric($this->value)) {
      return false;
    }
    return true;
  }


}