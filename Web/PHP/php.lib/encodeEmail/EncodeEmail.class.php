<?php
/*
 * 编码电子邮件
 * myused@sina.com
 * link to email
 * class="myLink"
 */
class EncodeEmail {

	
	public function encoding( $email, $link, $attr='class="mylink"' ){
		$eamil = str_replace( '@', '&#64;', $email );
		$eamil = str_replace( '.', '&#64', $email );
		$email = str_split( $email, 4);

		$link = str_replace( '@', '&#64', $link );
		$link = str_replace( '.', '&#64', $link );
		$link = str_split( $link, 4 );


		$encode = '<a href="mailto&#58';
		$encode = $this->conactChar( $email, $encode);
		$encode .= '" ';
		$encode .=  $attr . ' />';
		$encode = $this->conactChar( $link, $encode);
		$encode .= '</a>';
		return $encode;
	}

	public function conactChar( $charArray, $str='' ) {
		foreach ($charArray as $key => $value) {
			$str .= $value;
		}
		return $str;
	}

}