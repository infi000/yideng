// "use strict";


//1.concat();用于连接一个和多个数组，方法不会改变原本数组，会返回一个链接数组的副本
//语法;array1.concat(array2,array3,...,arrayX) 参数可以传一个或多个
// 注意： concat() 不会改变原始数组
// var arr=[1,2,3],
//     arr2=[11,22,33],
//     arr3=[111,222,333];
// var res=arr.concat(arr2,arr3);

//res;[1, 2, 3, 11, 22, 33, 111, 222, 333];
//arr;arr2;arr3;不变

//2.filter();检查数组内元素，生成符合的元素的新数组
// 注意： filter() 不会对空数组进行检测。
// 注意： filter() 不会改变原始数组
// var arr=[1,2,3,4];
// var res=arr.filter(function(val){

//     return val>=2;
//     //这里注意一下，return 后面直接跟检查的方法。平时比较不注意
// });
//arr;[1,2,3,4]不改变原来数组
//res;[2,3,4]

//3.forEach():对数组内每个元素执行方法,
//返回undefined
var arr=[1,2,3,4];
var copy=[]
arr.forEach(function(val){
  copy.push(val)
});
//copy;[1,2,3,4]
var arr=[1,2,3,"",4];
//copy;[1,2,3,"",4]
var arr=[1,2,,4];
//copy;[1,2,3,4] 因为所以2没有值，被跳过了



