<?php


namespace Behavioral\Strategy\Validator;


/**
 * Class ValidatorStrategy
 *
 * @package Behavioral\Strategy\Validator
 */
class ValidatorStrategy {

  /**
   * @var \Behavioral\Strategy\Validator\ValidatorInterface
   */
  protected $validator;

  /**
   * ValidatorStrategy constructor.
   *
   * @param \Behavioral\Strategy\Validator\ValidatorInterface $validator
   */
  public function __construct(ValidatorInterface $validator) {
    $this->validator = $validator;
  }

  /**
   * @return bool
   */
  public function validate() {
    return $this->validator->validate();
  }
}