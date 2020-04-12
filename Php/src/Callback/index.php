<?php
require __DIR__ . '/../../../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

function string(string $string, callable $callback) {
  $result = [
    'upper' => strtoupper($string),
    'lower' => strtolower($string)
  ];
    call_user_func($callback,$result);

}

function render(string $string,callable $callback) {

  call_user_func($callback,$string);
}

render('Adam ma kota',function($string) {
  echo $string;
});

string('Alex',function($name) {
  echo $name['upper'];
});

$string = 'adam';

$f = function() use($string) {
 return 'czesc '.$string;
};

echo $f();