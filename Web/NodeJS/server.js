var http = require('http');
http.createServer(function (request, response) {

	response.writeHead(200, {'Content-Type': 'text/plain'});
	response.end('Hello NodeJS\n');

}).listen(8080, 'www.nodejs.com');

console.log('Server running at www.nodejs.com:8080/');

