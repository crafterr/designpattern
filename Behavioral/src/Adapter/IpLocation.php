<?php


namespace Behavioral\Adapter;


class IpLocation {
  public function locate($ipAddress) {
    return [
      'country_name' => 'Kraków',
      'region_name' => 'Malo',
      'city' => 'Kraków'
    ];
  }
}