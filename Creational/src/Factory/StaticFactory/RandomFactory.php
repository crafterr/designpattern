<?php
declare(strict_types=1);

namespace Creational\Factory\StaticFactory;

use InvalidArgumentException;

/**
 * Class Factory
 *
 * @package Creational\Factory\StaticFactory
 */
final class RandomFactory {

  /**
   * @param string $type
   *
   * @return \Creational\Factory\StaticFactory\Formatter
   */
  public static function create(): Formatter {
    $types = ['FormatNumber','FormatString'];
    $class = $types[array_rand($types)];

    if (in_array($class,$types)) {
      $c = "Creational\Factory\StaticFactory\\$class";
      return new $c();
    }
    throw new InvalidArgumentException('Unknown format given');
  }
}