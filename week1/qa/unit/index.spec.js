describe("测试基本函数api",function(){//描述文件
    it("+1函数应用",function(){//断言
            expect(window.add(1)).toBe(1);
            expect(window.add(2)).toBe(3);
    });
});