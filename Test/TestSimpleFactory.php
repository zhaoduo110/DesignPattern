<?php

namespace Test;

require __DIR__ . '/../vendor/autoload.php';

use App\SimpleFactory\Factory;



$obj = Factory::create(Factory::BICYCLE);
var_dump($obj->run());