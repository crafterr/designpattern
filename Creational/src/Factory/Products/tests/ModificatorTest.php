<?php


namespace Creational\Factory\Products\tests;
use Creational\Factory\Products\Modificator;
use Creational\Factory\Products\ModificatorCreator;
use Creational\Factory\Products\Product;
use Creational\Factory\Products\ProductCreator;;
use PHPUnit\Framework\TestCase;

class ModificatorTest extends TestCase {

  public function testInstanceOfCreator() {
    $this->assertInstanceOf(Modificator::class, ModificatorCreator::creator('Product1',22));
  }



  public function testMethodModify() {
    $modificator = ModificatorCreator::creator('Product1',22);

    $this->assertIsString($modificator->modify());
  }

  public function testMethodModifyReturnValidValue() {
    $value = 'Product Product1 zostal zmodyfikowany';
    $this->assertSame(ModificatorCreator::creator('Product1',22)->modify(),$value);
  }

}