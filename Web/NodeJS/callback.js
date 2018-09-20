
// Node.js 异步编程的直接体现就是回调。
// 异步编程依托于回调来实现，但不能说使用了回调后程序就异步化了。
// 回调函数在完成任务后就会被调用，Node 使用了大量的回调函数，Node 所有 API 都支持回调函数。



// 阻塞代码实例
var fs = require('fs');

var data = fs.readFileSync('input.txt');
console.log(data.toString());
console.log('阻塞执行结束');

// 非阻塞
// 不需要等待文件读取完
// 这样就可以在读取文件时同时执行接下来的代码，大大提高了程序的性能。
var fs = require('fs');
fs.readFile('input.txt', function(err, data){
	if (err) return console.errot(err);
	console.log(data.toString());
});
console.log('非阻塞执行结束');