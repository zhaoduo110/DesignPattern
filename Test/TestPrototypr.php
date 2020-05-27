<?php

namespace Test;

require __DIR__ . '/../vendor/autoload.php';

use App\ProtoType\People;
use App\ProtoType\Company;

/**
 * ======================================
 * ======================================
 * ===============浅复制==================
 * ======================================
 * ======================================
 */
//实例化一个People  设置名字和公司
//$person1 = new People('赵帅帅');
//$company = new Company();
//$company->setName('China');
//$person1->setCompany($company);
//
//$person2 = $person1->shallowCopy();
////看两个是否一样  其实从输入也能看出company的属性是同一个对象
//var_dump($person1,$person2);
//
////当company这个对象修改了名字之后  person1和person2的公司会一起跟着变化
//$company->setName('种花家');
//var_dump($person1,$person2);
//
////使用person对象操作改变属性实验一下   一样两个都会变
//$person1Com = $person1->getCompany();
//$person1Com->setName('大中华');
//var_dump($person1,$person2);

/**
 * ======================================
 * ======================================
 * ===============深复制==================
 * ======================================
 * ======================================
 */
//实例化一个People  设置名字和公司
$person1 = new People('赵帅帅');
$company = new Company();
$company->setName('China');
$person1->setCompany($company);

$person2 = $person1->deepCopy();
//两个对象的company没有指向一个
var_dump($person1, $person2);

//company这个对象修改了名字之后  只有person1的会会变  person2不会被影响
$company->setName('种花家');
var_dump($person1, $person2);

//使用person对象操作改变属性实验一下  操作了person2 只有person2会变  person1不会被影响
$person2Com = $person2->getCompany();
$person2Com->setName('大中华');
var_dump($person1, $person2);
