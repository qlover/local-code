<?php
return array(
	//'配置项'=>'配置值'
	'URL_HTML_SUFFIX'		=> 'html',  // 可以在最后动作中加上的混淆后缀

	// 页面底部显示跟踪信息
	'SHOW_PAGE_TRACE'		=> true,

	// 默认分组设置
	'DEFAULT_MODEUL' 		=> 'Home',  // 默认的模块
	// 'MODULE_ALLOW_LIST'		=> array('Admin', 'Home'),  // 定义可供访问的分组列表


	// step1: 布局设置
    // 'TMPL_ENGINE_TYPE'      =>  'Smarty',     // 变换成 Smarty 模板引擎

    // 为 Smarty 做配置
    'TMPL_ENGINE_CONFIG'	=> array(
    		// 'left_delimiter' => '<@',  // 修改左标记
    		// 'right_delimiter' => '@>',  // 修改右标记
    	),


    
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'test_msgsys',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root123',          // 密码
    'DB_PORT'               =>  '',        // 端口
    'DB_PREFIX'             =>  'msg_',    // 数据库表前缀
);