<?php 
/**
 * 定义类 学习Public private protected
 */
class Person
{
  public $name="zcy";//公有的 属性
  private $age="31";//私有的
  protected $money="10000";//受保护的
private $x=0;
//私有的成员方法 不能再类的外部直接访问
  private function getAge(){
    return $this->age;
  }

  //被保护的成员方法 不能在类的外部直接访问
  protected function getMoney(){
    return $this->money;
  }

  public function userCard(){
  echo "name->".$this->name. "  age->" . $this->getAge(). "  money->" . $this->getMoney();
}

public function __set($key,$val){
  //魔术方法 只针对私有成员和受保护成员
  echo $key."============>>>".$val;
    if($key=='name'&&$val=='laowang'){
      $this->name="xiaowang";
    }
}

  public function __get($key)
  {  
  //魔术方法 只针对私有成员和受保护成员
        if($key=='age'){
           return "girl not tell you";
           }
               if($key=='name'){
                //这个是公有成员 不会执行
           return "boy not tell you";
           }
               if($key=='money'){
           return "people  not tell you";
           }
  }
  public function __isset($key)
  {
    if($key=="money"){
      echo "sorry is personally";
    }
  }

  public function __unset($key)
  {
   if($key=="x"){
    echo "xxxxx"; 
   }
  }

}

$xw=new Person();
//访问私有方法 getAge
// echo $xw->getAge();//报错无权限 
//访问保护方法getMoney
// echo $xw->getMoney();//报错无权限
//访问公有方法userCard
// echo $xw->userCard();//成功从公有方法中调用私有方法

//设置公有成员属性
// $xw->name="laowang";
// echo $xw->userCard();//成功从公有方法中调用私有方法 没有执行魔术方法set

//如果name是类的私有成员或者受保护成员
// $xw->name="laowang";
// echo $xw->userCard();// 输出name============>>>laowang name->xiaowang age->31 money->10000执行了set方法

//获取私有成员属性
// echo $xw->age; //输出girl not tell you
// echo $xw->name; //输出zcy
// echo $xw->money; //输出people  not tell you

//var_dump 输出表达式
// var_dump (isset($xw->money));//false "sorry is personally";

//unset
unset($xw->x);//可以删除私有成员
echo $xw->x;//无输出



 ?> 