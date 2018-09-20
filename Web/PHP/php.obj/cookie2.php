<?php

// 设置 cookie 并加上有效期

setcookie('name', 'qlover',time() + 100, '/','', false, false);
setcookie('pass', 'qlover1234567890', time() + 100, '/','', false, true );
// 当然删除一个 cookie 可以像下面这样写
// setcookie('name',time() - 1);
// 获取 cookie 
print_r($_COOKIE);
// 每等待 10 秒cookie 会不存在
?>
<hr>

<?php

// HTTPonly
// 设置了所有参数
var_dump($_COOKIE);
?>


<script>

(function(){
	console.log( document.cookie );
	// 会发现设置了 httponly 为 false 的 JS 获取不到
})();
</script>



<h2>另一种 cookie 语法</h2>
<?php

setcookie('user[name]', 'qlover');
setcookie('user[pass]', 'qlover123456789');
var_dump($_COOKIE);

?>

