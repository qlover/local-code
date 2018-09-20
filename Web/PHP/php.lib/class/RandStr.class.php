<?php
class RandStr{

	protected  $R_NUM = "1234567890";
	protected  $R_LETTER = "abcdefghijklmnoqrstuvwxyz";
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

}







