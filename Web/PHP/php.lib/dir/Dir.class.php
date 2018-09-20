<?php
/***
 *  目录操作
 *
 *
 * 列出目录内容
 * 1.判断是否是一个路径
 * 2.获取文件句柄
 * 3.用文件句柄操作文件
 * 删除目录内容
 * 1.
 * 2.
 * 3.
 */
class Dir {

	protected $dir;
	public static $DS = DIRECTORY_SEPARATOR;
	protected $handle;
	public function __construct( $dir='./' ) {
		$this->setDir( $dir );
	}

	public function setDir( $dir ) {
		$this->dir = $dir;  // 判断是否是路径
		$this->handle = opendir( $this->dir );	// 获取文件句柄,是资源类型
	}

	public function showList(){
		if( is_dir( $this->dir ) ){
			if( $this->handle ){
				$result = array();
				while (	$file = readdir( $this->handle) ) {
					$result[] = $file;
				}
				closedir( $this->handle );
				return $result;
			}else{
				die("获取文件句柄失败！");
			}
		}else{
			die("不是一个有效的路径！");
		}
	}

	public function delFile	( $filename ){
		unlink( $filename )	;
	}

	public function delDir( $dir) {
		rmdir( $dir );
	}
	

}