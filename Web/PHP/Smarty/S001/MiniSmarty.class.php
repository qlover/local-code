<?php

class MiniSmarty {

	public $tplVar = array();


	function compile( $tpl ){
		$cfile = $tpl.'php';
		if( file_exists($cfile) 
			&& fileatime($cfile) > fileatime($tpl)) {
			require $cfile;
			// 引入文件是在 该类的内部，是不能访问到全局的
		} else{
			$cont = file_get_contents($tpl);
			$cont = str_replace("{\$", "<?php echo \$this->tplVar['", $cont);
			$cont = str_replace("}", "'];?>", $cont);
			// 然后将替换成的字符串放入一个混编写文件里边
			file_put_contents($cfile, $cont);
			// 引入混编的文件 $content 变量的
		}
	}

	public function assign( $key, $val ) {
		$this->tplVar[$key] = $val;
	}

}


