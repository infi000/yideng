<?php 
/**
 * 测试构造函数和析构函数
 */
class Person
{
  
  public function __construct($name,$age)
  {
    // 当这个类 new的时候自动执行的
    $this->name=$name;
    $this->age=$age;
  }
  public function data(){
    return $this->age;
  }
  public function __destruct(){
    // 可以进行资源的是释放操作，数据库关闭等
    //对象呗销毁的时候执行 没有代码再去运行了
    echo "bye bye {$this->name }"
  }
}
$xiaowang=new Person(30);
echo $xiaowang->data();
 ?> 