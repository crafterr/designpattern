<?php


namespace Php\Family;


class Renderer {

  /**
   * @var \Php\Family\Family
   */
  private $family;

  public function __construct(Family $family) {
    $this->family = $family;
  }

  public function render() {
    $isRich = ($this->family->isRich())?'jest boagata':'nie jest bogata';
    return 'Ta rodzina  o nazwie '.$this->family->getName().' o liczbie '.$this->family->getCount().' oraz '.$isRich;
  }
}