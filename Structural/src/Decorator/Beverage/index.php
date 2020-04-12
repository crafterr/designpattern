
<?php
require __DIR__ . '/../../../../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use Structural\Decorator\Beverage\Expresso;
use Structural\Decorator\Beverage\Caramel;
use Structural\Decorator\Beverage\Soy;

$expresso = new Soy(new Caramel(new Expresso()));


dump($expresso->cost());