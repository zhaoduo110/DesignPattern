<?php
namespace Test;

require __DIR__.'/../vendor/autoload.php';

use App\FactoryMethod\BmwCarFactory;

$bmwCarFactory = new BmwCarFactory();
$bmwCar = $bmwCarFactory->create();
var_dump($bmwCar->setAutoLogos());
