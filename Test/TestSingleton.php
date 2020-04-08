<?php
namespace Test;

require __DIR__.'/../vendor/autoload.php';

use App\Singleton\DB;

DB::getInstance();

$a = DB::getInstance();
var_dump($a);
$b = DB::getInstance();
var_dump($b);
var_dump($a == $b);

