<?php


namespace Php\Family;


class Family {
  private $name;

  private $count;

  private $rich;

  public function __construct(string $name) {
    $this->name = $name;
  }

  public function setMemberCount(int $count) {
    $this->count = $count;
    return $this;
  }

  public function setRich($rich) {
    $this->rich = $rich;
    return $this;
  }

  public function when($func) {
    return call_user_func($func);
  }

  /**
   * @return string
   */
  public function getName(): string {
    return $this->name;
  }

  /**
   * @return mixed
   */
  public function getCount() {
    return $this->count;
  }

  /**
   * @return mixed
   */
  public function getRich() {
    return $this->rich;
  }

  public function isRich() {
    return $this->getRich();
  }





}