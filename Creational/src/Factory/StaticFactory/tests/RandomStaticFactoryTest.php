<?php

declare(strict_types=1);
namespace Creational\Factory\StaticFactory\tests;

use Creational\Factory\StaticFactory\Factory;
use Creational\Factory\StaticFactory\FormatNumber;
use Creational\Factory\StaticFactory\FormatString;
use Creational\Factory\StaticFactory\RandomFactory;
use PHPUnit\Framework\TestCase;
class RandomStaticFactoryTest extends TestCase {

  public function testRandomFactoryGenerate() {
    $this->assertInstanceOf(FormatString::class,RandomFactory::create());

  }
}