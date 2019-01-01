<?php 
// 定义一个car类
class Car 
  //设置类的属性 关键字 属性名
{

  public  $color ;
  public   $logo="toyota";
    //设置类的方法 关键字 属性名
  public function info($word){
      echo $word. " i am ".  $this->logo;
  }
  public function say(){
    //调用类的属性 ->
    $this->info('hi');
   return $this->color;
  }
  public function setColor($c){
    $this->color=$c;
  }

}
//实例化一个对象
$car1=new Car();
$car1->color="red";
$car1color=$car1->say();
echo "<Br>";
echo $car1color;
echo "<Br>";
$car1->setColor("green");
$car2color=$car1->say();
echo "<Br>";
echo $car2color;

 ?> 