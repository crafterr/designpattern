<?php
declare(strict_types=1);

namespace Creational\Factory\StaticFactory;


/**
 * Class FormatNumber
 *
 * @package Creational\Factory\StaticFactory
 */
class FormatNumber implements Formatter {

  /**
   * @inheritDoc
   **/
  public function format(string $input): string {
    return number_format((int) $input);
  }

}