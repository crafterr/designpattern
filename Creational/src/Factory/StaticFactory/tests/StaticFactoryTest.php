<?php

declare(strict_types=1);
namespace Creational\Factory\StaticFactory\tests;

use Creational\Factory\StaticFactory\Factory;
use Creational\Factory\StaticFactory\FormatNumber;
use Creational\Factory\StaticFactory\FormatString;
use PHPUnit\Framework\TestCase;
class StaticFactoryTest extends TestCase {

  public function testCanCreateNumberFormatter() {
    $this->assertInstanceOf(FormatNumber::class, Factory::create('number'));
  }

  public function testCanCreateStringFormatter() {
    $this->assertInstanceOf(FormatString::class,Factory::create('string'));
  }

  public function testException() {
    $this->expectException(\InvalidArgumentException::class);
    Factory::create('object');
  }
}