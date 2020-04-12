<?php
require __DIR__ . '/../../../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use Behavioral\Adapter\LocalNewsController;

$controller = new LocalNewsController();

echo $controller->index();