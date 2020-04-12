<?php

declare(strict_types=1);
namespace Behavioral\Bystander\tests;

use Behavioral\Bystander\Context;
use Behavioral\Bystander\MyCommand;
use PHPUnit\Framework\TestCase;
class MyCommandTest extends TestCase{

  public function testMock() {
    $mockContext = $this->createMock(Context::class);
    $mockContext->method('perform')->will($this->returnValue(5));

    $myCommand = new MyCommand();
    $testVal = $myCommand->execute($mockContext);
    $this->assertEquals(10,$testVal);

  }

  public function testParamMock() {
    $mockContext = $this->createMock(Context::class);
    $mockContext->method('getParam')->will($this->returnValue('adam'));

    dump($mockContext); die();
    $this->assertEquals('adam',$mockContext);
  }
}