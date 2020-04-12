<?php

declare(strict_types=1);
namespace Structural\Decorator\Beverage\tests;

use PHPUnit\Framework\TestCase;
use Structural\Decorator\Beverage\Caramel;
use Structural\Decorator\Beverage\Decaf;
use Structural\Decorator\Beverage\Expresso;
use Structural\Decorator\Beverage\Soy;

class BeverageTest extends TestCase{


  public function testCanCalculatePriceForBasicExpresso() {
    $expresso = new Expresso();
    $this->assertSame(10,$expresso->cost());
  }

  public function testCanCalculatePriceForBasicDecaf() {
    $decaf = new Decaf();
    $this->assertSame(20,$decaf->cost());
  }


  /**
   * Tests for expresso with addition
   */
  public function testCanCalculatePriceForExpressoWithCarmel() {
    $expresso = new Caramel(new Expresso());
    $this->assertSame(12,$expresso->cost());
  }

  public function testCanCalculatePriceForExpressoWithSoy() {
    $expresso = new Soy(new Expresso());
    $this->assertSame(14,$expresso->cost());
  }

  public function testCanCalculatePriceForExpressoWithCarmelAndSoy() {
    $expresso = new Caramel(new Soy(new Expresso()));
    $this->assertSame(16,$expresso->cost());
  }

  /**
   * Tests for Decaf with additions
   */
  public function testCanCalculatePriceForDecafWithCarmel() {
    $decaf = new Caramel(new Decaf());
    $this->assertSame(22,$decaf->cost());
  }

  public function testCanCalculatePriceForDecafWithSoy() {
    $decaf = new Soy(new Decaf());
    $this->assertSame(24,$decaf->cost());
  }

  public function testCanCalculatePriceForDecafWithCarmelAndSoy() {
    $decaf = new Caramel(new Soy(new Decaf()));
    $this->assertSame(26,$decaf->cost());
  }
}