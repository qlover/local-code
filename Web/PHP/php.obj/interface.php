<?php

// 判断某个类是否实现了某个接口
/**
 * 检测某个类
 * 
 * @param $class_name 类名或者对象
 * @param　$interface_name 接口名
 *
 */
function isImplementOf( $class_name, $interface_name ){
	// 判断参数1，如果是对象，则获取其类名
	if ( is_object($class_name)) {
		$class_name = get_class($class_name);
	}
	// 检测这个类，是否实现了某个接口
	$class_ref = new RefleactionClass($class_name);
	return $class_ref->implementsInfterface($interface_name);
}
