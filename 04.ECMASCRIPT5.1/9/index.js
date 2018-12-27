
function test(){
    if(false){
        var i=10;
    }
    console.log(i)
}
test();
//undefined;

function test2(){
    if(false){
        var i=10;
    }
    console.log(k)
}
test2();
//报错， k is not defined

//原因： js是函数级作用域，函数内部的变量，内部都可以访问，函数内部可以访问外部的，外部的不能访问函数内部的



function test3(){
    var i=1000;
    var k=5;
    return function(){
        return k
    }
};
var res=test3()();
//闭包：拿到本不该属于他的值