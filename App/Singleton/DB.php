<?php
namespace App\Singleton;

class DB
{
    //第一步：私有化静态变量存放对象实例
    private static $conn;

    //第二步：私有构造方法禁止外部实例化对象
    private function __construct()
    {
        self::$conn = mysqli_connect('localhost','root','');
    }
    //第三步：防止对象被clone __clone方法私有化或者直接返回已有实例
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
    //第四步：私有化 __wakeup方法，防止对象被序列化和反序列化
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
    //第五步：留下一个接口来返回实例化对象
    public static function getInstance()
    {
        if (!(self::$conn instanceof self)) {
            self::$conn = new self();
        }
        return self::$conn;
    }

}