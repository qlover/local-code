(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){

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
},{}],2:[function(require,module,exports){
var mod = require('./common-lib');

console.log('common-lib counter->', mod.counter); // 3
mod.incCounter();
console.log('common-lib counter->', mod.counter); // 3
},{"./common-lib":1}]},{},[2]);
