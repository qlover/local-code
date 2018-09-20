<?php


class Single2 {

	// 私有化构造方法
	private function __construct(){
		// This class cannot be instantiated
	}

	// 私有存放单例变量
	private static $_instance;

	// 私有化克隆方法
	private function __clone(){
		// sorry! this class cannot cloned.
	}


	// 给外界一个公共访问方法
	public static function getInstance(){
		if ( ! isset( static::$_instance) ) {
			static::$_instance = new self();
			return static::$_instance;
		} else {
			return static::$_instance;
		}
	}

}


$s1 = Single2::getInstance();
$s2 = Single2::getInstance();
$s3 = clone $s1;  // Fatal error: 
// Call to private Single2::__clone() from context
var_dump($s1); echo "<br />";
var_dump($s2); echo "<br />";
var_dump($s3); echo "<br />";

