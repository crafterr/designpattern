<?php


namespace Behavioral\Strategy\Validator;


class Required extends Validator {

  public function validate(): bool {
    if (strlen($this->value)==0) {
      return false;
    }
    return true;
  }

}