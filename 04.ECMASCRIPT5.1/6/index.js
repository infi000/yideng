// "use strict";


// 1.concat();用于连接一个和多个数组，方法不会改变原本数组，会返回一个链接数组的副本
// 语法;array1.concat(array2,array3,...,arrayX) 参数可以传一个或多个
// 注意： concat() 不会改变原始数组
// var arr=[1,2,3],
//     arr2=[11,22,33],
//     arr3=[111,222,333];
// var res=arr.concat(arr2,arr3);

// res;[1, 2, 3, 11, 22, 33, 111, 222, 333];
// arr;arr2;arr3;不变

// 2.filter();检查数组内元素，生成符合的元素的新数组
// 注意： filter() 不会对空数组进行检测。
// 注意： filter() 不会改变原始数组
// var arr=[1,2,3,4];
// var res=arr.filter(function(val){

//     return val>=2;
//     //这里注意一下，return 后面直接跟检查的方法。平时比较不注意
// });
// // arr;[1,2,3,4]不改变原来数组
// // res;[2,3,4]

// 3.forEach():对数组内每个元素执行方法,
// 返回undefined
// var arr=[1,2,3,4];
// var copy=[]
// arr.forEach(function(val){
//   copy.push(val)
// });
// //copy;[1,2,3,4]
// var arr=[1,2,3,"",4];
// //copy;[1,2,3,"",4]
// var arr=[1,2,,4];
// //copy;[1,2,3,4] 因为所以2没有值，被跳过了



// 4.join():将数组或类数组对象变成字符串，并返回。
// 返回字符串
// 不改变原数组
// var arr=[1,2,3];

// arr.join();//"1,2,3"
// arr.join("");//"123"
// arr.join("+");//"1+2+3"
// function f(a,b,c){
//     var res=Array.prototype.join.call(arguments);
//     console.log(res);
// }
// f(1,2,3);
// //"1,2,3" arugments是一个类数组对象，可以用call调用array.prototype.call的方法来执行

// 5.keys();返回一个包含数组中每个索引建的迭代对象
// 返回的是对象

// var arr = ['a', 'b', 'c'];
// var res=arr.keys();

// for(let keys of res){
//     console.log(keys);
// }

// 6.map();创建一个原数组中每个元素执行完一个方法后的数组
// 不更改原来数组

// var arr=[1, 4, 9, 16];
// var map1=arr.map(function(val){
//     return val*2
// })

// //[2,8,18,32]

// var ele=document.querySelectorAll('select option:checked');

// Array.prototype.map.call(ele,function(val){
//     return val.value
// })
// //代码展示了如何去遍历用 querySelectorAll 得到的动态对象集合。在这里，我们获得了文档里所有选中的选项。

// 7.slice();返回一个数组对象，这个数组对象是由begin和end（不包括end）决定的原数组的浅拷贝。
// 原数组不会被改变
// begin大于数组长度。从最后开始。负数从最后开始。-1是最后一位。
// var arr = ['ant', 'bison', 'camel', 'duck', 'elephant'];
// var a1=arr.slice(2);// ["camel", "duck", "elephant"] 参数2是begin
// var a2=arr.slice(2,4);//['camel', 'duck' ] 参数2是begin,4是end。不包括end


// 8.splice();方法通过删除一个元素或者添加一个元素，来修改原数组，以数组的形式返回原数组被修改的内容。
// 原数组被修改！
// // arr.splice(start,[deleteCount],[item1],[item2]......)
// //start开始位置 
// //deleteCount删除个数。0不删除，超过剩余长度全部删除。如果不填，则其相当于arr.length-start
// //item要添加的元素
// var arr=[1,2,3,4];
// arr.splice(1,0,1.5);
// //返回[]
// //arr;[1,1,5,2,3,4]
// var arr=[1,2,3,4];
// arr.splice(1,2,1.5,2.5);
// //返回[2,3]
// //arr;[1,1.5,2.5,4]
