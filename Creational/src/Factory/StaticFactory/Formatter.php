<?php
declare(strict_types=1);

namespace Creational\Factory\StaticFactory;

/**
 * Interface Formatter
 *
 * @package Creational\Factory\StaticFactory
 */
interface Formatter {

  /**
   * @param string $input
   *
   * @return string
   */
  public function format(string $input): string;
}