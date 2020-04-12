
<?php
require __DIR__ . '/../../../../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
use Behavioral\Strategy\Validator\Email;
use Behavioral\Strategy\Validator\Required;
use Behavioral\Strategy\Validator\Numeric;
use Behavioral\Strategy\Validator\ValidatorStrategy;
use Behavioral\Strategy\Validator\ValidatorProcess;
/*
$validatorEmail = new ValidatorStrategy(new Email('adam@crafter.net.pl','email'));
if ($validatorEmail->validate()) {
  echo "jest ok email prawidlowy \n";
}

$validatorRequired = new ValidatorStrategy(new Required('adam ma kota','name'));
if ($validatorRequired->validate()) {
  echo "jest ok name nie jest puysty\n";
}

$validatorNumeric = new ValidatorStrategy(new Numeric(1,'numer'));
if ($validatorNumeric->validate()) {
  echo "numer jest faktycznie numerem\n";
}
*/

$request = [
  [
    'name' => 'email',
    'value' => 'adamoooo',
    'rules' => 'email|required'
  ],
  [
    'name' => 'price',
    'value' => 123,
    'rules' => 'numeric|required'
  ],
  [
    'name' => 'quantity',
    'value' => '',
    'rules' => 'numeric|required'
  ]
];

echo ValidatorProcess::validate($request);

