### 原型模式
###### 通过创建原型，然后使用克隆方法实现对象创建而不是使用标准的 new 方式

#### 作用：
对一些大型对象，每次去new，初始化开销很大，这个时候我们 先new 一个模版对象，然后其他实例都去clone这个模版， 这样可以节约不少性能。这个模版，就是原型（Prototype）

#### 使用场景：
- 大数据量 (例如：通过 ORM 模型一次性往数据库插入 1,000,000 条数据)


#### UML图：


#### 对象的浅复制和深复制
##### 浅复制：clone 
- 比如 `clone new Db();`
- 当被克隆对象的属性中有对象等引用的时候，浅复制出来的对象的这个属性会指向同一个引用，即两个对象其中任何一个的这个属性发生变化都会发生变化，也有这样的应用场景

##### 深复制：利用序列化和反序列化实现、或者在class的__clone方法中对引用属性进行一次单独的clone
- 比如：`unserialize(serialize(new Db()));`
- 当被克隆对象的属性中有对象等引用的时候，深复制出来的对象的这个属性也是单独复制的，即两个对象完全互不相干