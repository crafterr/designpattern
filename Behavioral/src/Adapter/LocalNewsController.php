<?php


namespace Behavioral\Adapter;

use Behavioral\Adapter\Locator\IpDatabaseLocationLocator;

class LocalNewsController {

  /**
   * @return string
   */
  public function index() {

//    $location = new Locator\IpLocationLocator();
    $location = new IpDatabaseLocationLocator();
    $mark = $location->fromIp('127.0.0.1');


    return $mark->render();
  }
}