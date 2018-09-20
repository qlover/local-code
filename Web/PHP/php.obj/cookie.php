<?php
header("Content-Type:text/html; charset=utf-8");
// 设置 cookie 
//setcookie('name','qlover');

// 获取 cookie 
print_r( $_COOKIE );


// 在第一次执行这个页面的时候，会在第一次访问的浏览器中设置 cookie 
// 如果第二将第3 行删除掉，同样第二次访问还是访问得到设置的 name 值


 
/* 下面是 chrome Network 中获取的东西

Request URL:http://www.php.com/PHPO/cookie.php
Request Method:GET
Status Code:200 OK
Remote Address:127.0.0.1:80
Response Headers
view source
Connection:Keep-Alive
Content-Length:31
Content-Type:text/html
Date:Thu, 02 Mar 2017 11:22:29 GMT
Keep-Alive:timeout=5, max=100
Server:Apache/2.2.22 (Win32) PHP/5.3.13
X-Powered-By:PHP/5.3.13
Request Headers
view source
Accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*//*;q=0.8
Accept-Encoding:gzip, deflate, sdch
Accept-Language:zh-CN,zh;q=0.8
Cache-Control:no-cache
Connection:keep-alive
Cookie:name=qlover
Host:www.php.com
Pragma:no-cache
Referer:http://www.php.com/PHPO/
Upgrade-Insecure-Requests:1
User-Agent:Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36

*/