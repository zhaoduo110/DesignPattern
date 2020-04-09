#### 多例模式
###### 多例模式被公认为是 反面模式，为了获得更好的可测试性和可维护性，请使用『依赖注入模式』

##### 作用：
###### 多例模式是指存在一个类有多个相同实例，而且该实例都是该类本身。这个类叫做多例类。 

##### 多例模式的特点是：
	1. 多例类可以有多个实例。
	2. 多例类必须自己创建、管理自己的实例，并向外界提供自己的实例。
> 多例模式实际上就是单例模式的推广（是指多个单实例放在一个Class中管理）

##### 使用场景：
	* 2 个数据库连接器，比如一个是 MySQL ，另一个是 SQLite
	* 多个记录器（一个用于记录调试消息，一个用于记录错误）


##### UML图：

##### 步骤：
- 第一步：定义实例数组
- 第二步：私有化构造方法，不能从外部进行实例化
- 第三步：私有化__clone方法，防止对象被复制
- 第四步：私有__wake方法，防止序列化和反序列化
- 第五步：通过指定实例名称返回实例   使用到该实例时才会被实例化

##### Demo
```php
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
```