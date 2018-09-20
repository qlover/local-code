<?php
/*
 * 创建一个 view 和一个 view_c 目录，分别存放 .html 和 .html.php 文件
 * .html.php 文件用于存放 MiniSmarty 类编译后的视图文件
 *
 */

class MiniSmarty {
	public $template_dri = "./view/";  // 视图文件目录
	public $templatec_dri = "./view_c/";  // 模板目录，也就是混编文件目录
	public $tplVar = array();


	function compile( $tpl ){
		$tfile = $this->template_dri.$tpl;
		$cfile = $this->templatec_dri.$tpl.'.php';
		if( file_exists($cfile) 
			// 解决如果有原视图文件中有所改变后，编译文件保持不变的问题
			&& fileatime($cfile) > fileatime($tfile) ) {
			return $cfile;
		}
		$cont = file_get_contents($tfile);
		$cont = str_replace("{\$", "<?php echo \$this->tplVar['", $cont);
		$cont = str_replace("}", "'];?>", $cont);
		file_put_contents($cfile, $cont);
		return $cfile;
	}

	public function assign( $key, $val ) {
		$this->tplVar[$key] = $val;
	}

	public function display($tpl) {
		$re = $this->compile($tpl);
		require $re;
	}

}

/* 当然这个只是我们自己定义的模板，只为了演示原理 */

