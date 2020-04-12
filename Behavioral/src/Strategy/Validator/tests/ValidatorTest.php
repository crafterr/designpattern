<?php

declare(strict_types=1);
namespace Behavioral\Strategy\Validator\tests;

use Behavioral\Strategy\Validator\Email;
use Behavioral\Strategy\Validator\Numeric;
use Behavioral\Strategy\Validator\Required;
use PHPUnit\Framework\TestCase;
class ValidatorTest extends TestCase{

  public function testIsEmailValidatorValid() {
    $email = 'adam@onet.pl';
    $emailValidator = new Email($email,'email');
    $this->assertTrue($emailValidator->validate());
  }

  public function testIsRequiredValidatorValid() {
    $string = 'adam ma kota';
    $requireValidator = new Required($string,'name');
    $this->assertTrue($requireValidator->validate());
  }

  public function testIsNumericValidatorValid() {
    $numeric = 1223332342;
    $numericValidator = new Numeric($numeric,'number');
    $this->assertTrue($numericValidator->validate());
  }
}