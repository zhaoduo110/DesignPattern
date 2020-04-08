<?php


namespace Test;

require __DIR__.'/../vendor/autoload.php';


use App\Multiton\Multiton;

//Mysql的单实例
$a = Multiton::getInstance(Multiton::INSTANCE_MYSQL);
var_dump($a);
//SQLITE的单实例
$b = Multiton::getInstance(Multiton::INSTANCE_SQLITE);
var_dump($b);
//SQLITE的单实例
$c = Multiton::getInstance(Multiton::INSTANCE_SQLITE);
var_dump($c);

//输出true  $b和$c是同一个对象
var_dump($b === $c);
