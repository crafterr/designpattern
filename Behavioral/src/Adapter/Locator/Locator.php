<?php


namespace Behavioral\Adapter\Locator;
use Behavioral\Adapter\Mark;

interface Locator {

  public function fromIp($ipAddress):Mark;
}