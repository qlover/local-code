<?php
/*
 * 验证电子邮件
 *
 * myused@sina.com
 */
class TestEmail {

	private static $RegExp = 
		'/^([a-zA-Z0-9])([a-zA-Z0-9_-]+)\@([a-zA-Z0-9])+\.([a-zA-Z]+)$/';

	public function isValidEmail( $email ){
		return preg_match( static::$RegExp, $email) ?
			true : false;
	}
	

}