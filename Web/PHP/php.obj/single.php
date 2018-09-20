<?php



/**
 * 单例模式
 * 
 */
class Single {
	// 用静态属性储存本类的对象
	private static $_dao;  // 默认就为 null

	// 私有化构造函数
	private function __construct(){

	}

	// 给外界一个公共访问方法
	public static function getInstantOf(){
		// 先判断是否存在本类的对象
		if ( ! isset(static::$_dao) ) {
			static::$_dao = new self();
			return static::$_dao;
		} else {
			return static::$_dao;
		}
	}

}

$s1 = Single::getInstantOf();
$s2 = Single::getInstantOf();
var_dump($s1); echo "<br />";   // #1
var_dump($s2); echo "<br />";   // #1

// 笔记上面记过这样一句话，像上面的代码中有 bug
// 有什么 bug 呢？

// 如果克隆对象怎么办？
$s3 = clone $s1;
var_dump($s3); echo "<br />";  // #2

// 不就单例就不行了
// 见 Single2.php

