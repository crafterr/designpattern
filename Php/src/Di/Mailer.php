<?php


namespace Php\Di;


class Mailer {


  private Item $item;

  public function __construct(Item $item) {
    $this->item = $item;
  }

  public function mail($recipient, $content) {
    return $this->item->render($recipient,$content);
  }
}