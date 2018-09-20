<?php


/**
 * 主要为了在每个控制器中不用单独的 new 模型
 */

class ModelFactory {

	static $_M = array();
	static function M( $model_name ){
		if( !isset( static::$_M[$model_name] ) ||
			!( static::$_M[$model_name] instanceof $model_name ) ){
			static::$_M[$model_name] = new $model_name();
		}
		return static::$_M[$model_name];
	}


}


