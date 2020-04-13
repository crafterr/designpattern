<?php
require __DIR__ . '/../../../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use Php\Family\FamilyProvider;
use Php\Family\Renderer;


$familyProvider = FamilyProvider::create('Pietras')
                  ->setMemberCount(4)
                  ->setRich(true)
                  ->when(function( ) {
                      return 'adam ma kota';
                  });
dump($familyProvider); die();
$renderer = new Renderer($familyProvider);
echo $renderer->render();