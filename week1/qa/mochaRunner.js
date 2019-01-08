const Mocha = require("mocha");
const mocha = new Mocha({
    reporter: 'mochawesome',//记录插件
    reporterOptions: {
        reportDir: 'docs/mocha_report',//输出文件
        quiet: true
    }
});
mocha.addFile("./service/router.spec.js");
mocha.run(function(errLength) {
    if (errLength == 0) {
        process.exit();
    } else {
        console.log("出错长度", errLength);
        process.exit(1); //异常
    }
});