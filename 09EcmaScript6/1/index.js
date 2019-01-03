"use strict"

//1.const 可以提醒大家 不能被改名
//2.const 比较符合函数式编程
//3.本质的区别 编译器内部处理机制


 //结构 
 //对象

 // function test(){
 //    return {
 //        a:1,
 //        b:2
 //    }
 // }
 // const {a,b}=test();//a==1;b==2

 
//数值

// function test2(){
//     return [1,2,3];
// }
// const[o,t,thr]=test2();//o==1.t==2,thr==3



//字符串扩展

// const s="hello";
// const e="world";
// const c=`foor ${s} ${e} bar`;
// console.log(c);


//对象和数组

const s ="1234";
// const res=Array.from(s);
// console.log(res);//["1", "2", "3", "4"]

// const test=["tree","flower",...s];
// console.log(test);



// //函数
// //
// (()=>{
//     console.log(123);
// })()
// 
// 
// 



//1.let
// let 声明的变量，只在let命令所在的代码块有效。
// 
// {
//     let a="1";
//     console.log(a);//"1"
//     var b=2;
// }
// a;//a is not defined
// b;//1
// 
// * var 声明的变量，只有函数作用域和全局作用域

//* for循环的计数器 很适合let

// for (let i = 0; i < 10; i++) {
//     console.log(i);//输出1-9
// }

// console.log(i);//i is not defined
// 此代码只在for循环体内有效 在外部就报错
// var a=[];
// for (var i = 0; i < 10; i++) {
//    console.log(i);//输出1-9
//    a[i]=function(){
//    console.log(i);
//    }
// }

// a[1]();//10;
// console.log(i);//10 自身还++了一次

// var 声明的变量 在代码块外面依然可以调用 
// 在全局只有一个i 每次循环 i都++ 在循环内 赋值给a[i]的函数内的i是全局变量的i，也就是说a的组成员的i的方法的指向都是同一个i。
// 

var a = [];
for (let i = 0; i < 10; i++) {
  a[i] = function () {
    console.log(i);
  };
}
a[6](); // 6