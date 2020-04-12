<?php
require __DIR__ . '/../../../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use Php\Di\Mailer;
use Php\Di\UserManager;
use DI\ContainerBuilder;
use DI\Container;
use Php\Di\Item;
//normal way di
$user_manager = new UserManager(new Mailer(new Item()));


$container = new Container();

$user_manager = $container->get('\Php\Di\UserManager');


dump($user_manager->register("adam@onet.pl",'fender'));