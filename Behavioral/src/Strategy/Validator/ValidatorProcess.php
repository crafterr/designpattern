<?php


namespace Behavioral\Strategy\Validator;


class ValidatorProcess {

  public static $msg = '';

  public static function validate(array $request) {

    foreach ($request as $field) {
      $rules = explode("|",$field['rules']);

      foreach ($rules as $rule) {
        if ($rule == 'email') {

          $validator = new ValidatorStrategy(new Email($field['value'],$field['name']));
          if (!$validator->validate()) {
            self::$msg .= "Email {$field['name']} jest niepoprawny\n";
          }
        }
        if ($rule == 'required') {
          $validator = new ValidatorStrategy(new Required($field['value'],$field['name']));
          if (!$validator->validate()) {
            self::$msg .= "Pole {$field['name']} jest puste\n";
          }
        }
        if ($rule == 'numeric') {
          $validator = new ValidatorStrategy(new Numeric($field['value'],$field['name']));
          if (!$validator->validate()) {
            self::$msg .= "Pole {$field['name']} nie jest numeryczne\n";
          }
        }
      }
    }
    return self::$msg;
  }
}