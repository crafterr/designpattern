<?php


namespace Behavioral\Adapter;


class IpDatabase {
  public function findByAddressIp($ipAddress) {
    return [
      'cname' => 'Kraków',
      'rname' => 'Malo',
      'city' => 'Kraków'
    ];
  }
}