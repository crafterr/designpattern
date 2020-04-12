<?php


namespace Behavioral\Strategy\Validator;


class Email extends Validator {


  /**
   * @return string
   */
  public function validate(): bool {
    if (!filter_var($this->value, FILTER_VALIDATE_EMAIL)) {
      return false;
    }
    return true;
  }

}