<?php
namespace Test;

require __DIR__.'/../vendor/autoload.php';

use App\Singleton\DB;
use App\Singleton\DB2;

$a = DB::getInstance();
var_dump($a);
$b = DB::getInstance();
var_dump($b);
var_dump($a == $b);

$c = DB2::getInstance();
var_dump($c);
$d = DB2::getInstance();
var_dump($d);
