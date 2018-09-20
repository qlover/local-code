
// common-lib.js
var counter = 3;

function incCounter() {
	counter++;
}

// 默认输出的拷贝值
// module.exports = {
// 	counter: counter,
// 	incCounter: incCounter,
// };
// 将输出在一个函数中，以达到当内部 count 变动，外部导入的值也跟着变动
module.exports = {
  get counter() {
    return counter
  },
  incCounter: incCounter,
};