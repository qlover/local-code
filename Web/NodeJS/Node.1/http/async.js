/**
 * 异步
 * 
 */
(function () {
	var c = 0;
	function print(c) {
		console.log(c);
	}

	function plus(){
		setTimeout(function() {
			c+=1;
		}, 1000);
	}

	plus();
	print(c); //=> 0
	
})(); 
// 因为在执行 plus 时，里面有个定时器
// 将在执行后 1 秒在加加 c
// 而调用了 plus 就执行完成，定时器是个闭包
// 在执行 print 结果还是没变


(function () {
	var c = 0;
	function print(c) {
		console.log(c);
	}

	// 解决办法，传入一个回调
	function plus(callback){
		setTimeout(function() {
			c+=1;
			// 在加加完成后执行一次打印
			callback(c);
		}, 1000);
	}

	plus(print); //=> 1
	
})(); 

