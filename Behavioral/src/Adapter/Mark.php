<?php


namespace Behavioral\Adapter;


class Mark {

  /**
   * @var string
   */
  private $countryName;

  /**
   * @var string
   */
  private $regionName;

  /**
   * @var string
   */
  private $city;

  public function __construct(string $countryName, string $regionName, string $city) {
    $this->countryName = $countryName;
    $this->regionName = $regionName;
    $this->city = $city;
  }

  public function render() {
    return 'Zyjesz w miescie '.$this->countryName.' regionie '.$this->regionName.' oraz city '.$this->city;
  }
}