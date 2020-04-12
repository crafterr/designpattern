<?php
declare(strict_types=1);

namespace Creational\Factory\StaticFactory;


/**
 * Class FormatString
 *
 * @package Creational\Factory\StaticFactory
 */
class FormatString implements Formatter {

  /**
   * @inheritDoc
   **/
  public function format(string $input): string {
    return $input;
  }

}