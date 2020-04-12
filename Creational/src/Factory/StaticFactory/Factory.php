<?php
declare(strict_types=1);

namespace Creational\Factory\StaticFactory;

use InvalidArgumentException;

/**
 * Class Factory
 *
 * @package Creational\Factory\StaticFactory
 */
final class Factory {

  /**
   * @param string $type
   *
   * @return \Creational\Factory\StaticFactory\Formatter
   */
  public static function create(string $type): Formatter {
    if ($type == 'number') {
      return new FormatNumber();
    } elseif ($type == 'string') {
      return new FormatString();
    }

    throw new InvalidArgumentException('Unknown format given');
  }
}