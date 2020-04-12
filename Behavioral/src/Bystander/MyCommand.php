<?php


namespace Behavioral\Bystander;


class MyCommand {

  /**
   * @param \Behavioral\Bystander\Context $context
   * @param int $input
   *
   * @return int|mixed
   */
  public function execute(Context $context, $input = 0) {
    //do stuff
    try {
      $value = $context->perform($input);
      return ($value+5);
    } catch (\Exception $e) {
      return -1;
    }
  }

}