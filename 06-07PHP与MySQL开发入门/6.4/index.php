<?php
/**
 * 父类
 */

class Person {
    public $name;
    private $age; //私有的 继承不过来
    protected $money; //受保护的 继承过来 外部不可以访问
    public function __construct($name, $age, $money) {
        $this->name = $name;
        $this->age = $age;
        $this->money = $money;
    }
    public function cardInfo() {
        echo "name->" . $this->name . "age->" . $this->age . "money" . $this->money;
    }
}
//子类 继承父类Person

class Yellow extends Person {
    public function __construct($name, $age, $money) {
        parent::__construct($name, $age, $money);
    }
    public function cardInfo() {
        echo 12312;
        parent::cardInfo();
        // echo "<br>".$pp;
    }

    public function getAge() {
        echo $this->age; //子类不可以访问
    }
    public function getMoney() {
        echo $this->money; //子类可以访问
    }
}

//实例化tom对象，并且传参
$tom = new Yellow("tom", 11, 10000);

// echo $tom->cardInfo();//name->age->money 执行了父类的cardInfo方法 但是读取属性为空. 因为子类重写了构造函数construct

//    子类构造函数调用父类方法 parent::__construct(1,2,3);
//parent::__construct($name, $age, $money);
// echo $tom->cardInfo();//name->tomage->11money10000

// public function cardInfo($pppp)
// echo $tom->cardInfo(12313213123)//报错 ！！ 子类覆写父类的方法时 必须一致，包括 参数个数一致、参数如果没有值 则需要定义其默认值！

// echo $tom->getAge();//报错 子类不可以访问私有属性
// echo $tom->getMoney();//10000 子类可以访问受保护属性

// echo $tom->age;//没继承过来

// echo  $tom->money;//无法访问
?>