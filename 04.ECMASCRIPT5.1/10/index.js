function test(num) {
    var num = num + 1;
    return num
}
var num = 1;
console.log(test(num));
//2
console.log(num);
//1
//test函数内的num是这个变量创建了一个内存的副本

function test2(obj) {
    obj.age = 20;
    console.log(obj)
};
var obj = {
    name: 'xiaoming'
};
test2(obj);
//{name: "xiaoming", age: 20}
console.log(obj)
//{name: "xiaoming", age: 20}
//test2函数内的参数obj和全局变量的obj指向同一个内存的地址;

//按引用传递：object array
// 按值传递：string number boolean

