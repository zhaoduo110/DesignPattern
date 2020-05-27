<?php

namespace App\Multiton;

class Multiton
{

    const INSTANCE_MYSQL = 'mysql';
    const INSTANCE_SQLITE = 'sqlist';
    //第一步：定义实例数组
    private static $instances = array();

    /**
     * 第二步：私有化构造方法，不能从外部进行实例化
     * Multiton constructor.
     */
    private function __construct()
    {
    }

    /**
     * 第三步：私有化__clone方法，防止对象被复制
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * 第四步：私有__wake方法，防止序列化和反序列化
     */
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    /**
     * 第五步：通过指定实例名称返回实例   使用到该实例时才会被实例化
     * @param $instanceName
     * @return mixed
     */
    public static function getInstance($instanceName)
    {
        if (!isset(self::$instances[$instanceName])) {
            self::$instances[$instanceName] = new self();
        }
        return self::$instances[$instanceName];
    }
}
