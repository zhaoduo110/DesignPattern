<?php


namespace App\Singleton;

/**
 * 继承也没法创建多个
 * Class DB2
 * @package App\Singleton
 */
class DB2 extends DB
{
    public static function getInstance()
    {
        return parent::getInstance();
    }
}
