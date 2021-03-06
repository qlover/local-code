<?php
class RandStr{

	protected  $R_NUM = "1234567890";
	protected  $R_LETTER = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnoqrstuvwxyz";
	protected  $R_CHAR = "`[]\\;',./'\"~!@#$%^&*()_+{}|\":?";
	protected  $R_ALL = "`1234567890-=qwertyuiop[]\\asdfghjkl;'zxcvbnm,./~!@#$%^&*()_+{}|:\"? ";
	public function randNumberStr(){
		return $this->createStr('R_NUM');
	}
	public function randLetterStr(){
		return $this->createStr('R_LETTER');
	}
	public function randCharStr(){
		return $this->createStr('R_CHAR');
	}
	public function randAllStr(){
		return $this->createStr('R_ALL');
	}
	public function randStr(){
		return $this->createStr('R_ALL');
	}
	private function createStr( $R ){
		if ( !(bool)$R ) {
			return $this->randStr('R_ALL');
		}
		$randstr = $this->$R;
		$len = strlen( $randstr );
		$cnt = rand(30,50);
		$str = "";
		while( --$cnt ){
			$str .= $randstr[ rand(1, $len) - 1];
		}
		return $str;
	}




	// 提供函数
	// 因为 PHP4+ 就不需要在用种子了
	/*
	function generateRand( $len ){ 
		$c= "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"; 
		srand((double)microtime()*1000000); 
		$rand = '';
		for( $i = 0; $i < $len ; $i++) { 
			$rand .= $c[rand()%strlen($c)]; 
		} 
		return $rand; 
	} 
	*/

	function generateRand(){
		$l = func_num_args() == 1 ? func_get_arg(0) : rand(10, 30);
		$c = $this->R_LETTER . $this->R_NUM;
		$str = '';
		while( $l-- ){
			$str .= $c[ rand(1, strlen($c) ) - 1 ];
		}
		return $str;
	} 
}







