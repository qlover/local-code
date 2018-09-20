<?php

// 开启
session_start();

// 添加数据
$_SESSION['name'] = 'qlover';
$_SESSION['pass'] = 'qloer12345';

// 删除数据
unset($_SESSION['name']);

// 打印数据
var_dump($_SESSION);

// 最后会发现没有 $_SESSION['name'] 这个值
// 是因为删除了啊，这也说明了操作 session 比操作 cookie 更简单


