<?php


namespace Php\Family;


class FamilyProvider {
  public static function create($name) {
    return new Family($name);
  }
}