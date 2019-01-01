<?php 
//1.接口声明的关键字 interface
//2.接口可以声明常量也可以抽象方法
//3.接口中的方法都是抽象方法 不要用absctract 去人肉的定义
//4.接口不能被实例化 需要一个类去实现他
//5.一个类不能继承多个类 一个类可以实现多个接口

interface Person{
    CONST NAME="REN";
    public function say();
    public function eat();

}


interface Study{
    public function study();
}

class Student implements Person,study{
    CONST AGE=12;
    public function say(){
        echo "say";
    }
    public function eat(){
          echo "eat";
    }
    public function study(){
        echo "study";
    }
    public function test(){
        echo self::AGE;
    }
    public static function test2(){
        echo "test2".self::AGE;
    }
}
$tom =new Student;

$tom->eat();
$tom->say();
$tom->study();

//获取常量
echo Person::NAME;


echo $tom->test();

//执行静态方法
echo Student::test2();  
 ?>
