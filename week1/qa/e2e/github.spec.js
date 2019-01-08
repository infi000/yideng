//使用rize
const Rize = require('rize');
const rize = new Rize();
rize
  .goto('https://github.com/')
  .type('input.header-search-input', 'node')
  .press('Enter')
  .waitForNavigation()
  .assertSee('node.js')
   .saveScreenshot('searching-node.png')
  .end()  // 别忘了调用 `end` 方法来退出浏览器！