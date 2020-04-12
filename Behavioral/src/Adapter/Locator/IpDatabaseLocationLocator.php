<?php


namespace Behavioral\Adapter\Locator;
use Behavioral\Adapter\IpDatabase;
use Behavioral\Adapter\Mark;
class IpDatabaseLocationLocator implements Locator {

  public function fromIp($ipAddress): Mark {
    $locator = new IpDatabase();
    $location = $locator->findByAddressIp('127.0.0.1');

    $mark = new Mark(
      $location['cname'],
      $location['rname'],
      $location['city']
    );
    return $mark;
  }

}