<?php
/**
 * 1  含有抽象方法的类必须是抽象类
 2 抽象类不一定非得有抽象方法
 3 抽象类可以存在普通方法
 4 抽象类不能被实例化 必须由一个子类去继承 并且把抽象类的抽象方法都实现了
 */
abstract class Person
{
  //抽象方法没有具体方法体 {}不能有
   public abstract function eat();
  }
}

class Man extends Person{
  public function eat(){
    echo "man eat";
  }
}
$boy=new Man();

$boy->eat();

?>