const axios = require("axios");

describe("node 接口测试", function() {
    it("test接口测试", function(done) {
        axios.get("http://localhost:3000/test")
            .then(function(res) {

                if (res.data == 'Hello World!') {
                    done();
                } else {
                    done(new Error("数据"));
                }
            })
            .catch(function(error) {
                done(error)
            })
    })
})