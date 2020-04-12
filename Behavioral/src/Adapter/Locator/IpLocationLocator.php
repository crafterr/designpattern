<?php


namespace Behavioral\Adapter\Locator;

use Behavioral\Adapter\IpLocation;
use Behavioral\Adapter\Mark;


class IpLocationLocator implements Locator {

  public function fromIp($ipAddress): Mark {
    $locator = new IpLocation();
    $location = $locator->locate('127.0.0.1');

    $mark = new Mark(
      $location['country_name'],
      $location['region_name'],
      $location['city']
    );

    return $mark;
  }

}