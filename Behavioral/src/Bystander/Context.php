<?php


namespace Behavioral\Bystander;


class Context {
  public function perform($input) {
    return $input;
  }

  public function getParam($param) {
    return $param;
  }
}