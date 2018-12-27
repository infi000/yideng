// "use strict";
//1.
var msg="001";
console.log(this.msg);
//001; this指向windows

function Foo1(){
    this.msg="002";
};


Foo1.prototype.say=function(){
    console.log(this.msg)
}
var foo1=new Foo1;
foo1.say();

//002;this指向构造函数Foo1;


var obj={
    msg:"003",
    foo:function(){
        return this.msg
    }
};
obj.foo();
//003;this指向对象obj



var obj2={
    msg:"004",
    foo:function(){
        console.log(this.msg);
        return function(){
            console.log(this)
            console.log(this.msg)
        }
    }
};

(obj2.foo() )();
//001;执行this的是windows