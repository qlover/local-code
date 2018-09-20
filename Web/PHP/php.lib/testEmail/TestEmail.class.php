<?php
/*
 * 验证电子邮件
 *
 */
class TestEmail {

	private static $RegExp = '/^([a-zA-Z0-9])([a-zA-Z0-9-_])*@([a-zA-Z0-9])+\.([a-z]{2,6})$/';
	private $mail = '';

	public function __construct( $email){
		$this->mail = $email;
	}

	public function exec(){
		if( preg_match( static::$RegExp, $this->mail ) ){
			return 'true';
		}else{
			return 'false';
		}
	}
	
	

}