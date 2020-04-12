<?php


namespace Php\Di;


class Item {
  public function render($recipient, $content) {
    return 'renderuje '.$recipient.' oraz '.$content;
  }
}