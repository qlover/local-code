

// 爬虫

var http = require('http');
var url = 'http://www.sina.com.cn/';
http.get(url, function(res){
	var html = '';

	res.on('data', function(data){
		html+=data;
	});

	res.on('end', function(){
		console.log(html);
	})
})
// 当获取失败时
.on('error', function(){
	console.log('get failed');
});

