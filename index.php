<?php
define("APP_PATH",dirname(__FILE__).'/index');
define("SP_PATH",dirname(__FILE__).'/SpeedPHP');
define("UP_PATH",dirname(__FILE__).'/update');
$spConfig = array(
	"db" => array(//数据库配置
		'drive' => 'mysql',//数据库类型
		'host' => 'localhost',//数据库地址
		'login' => 'root',//数据库用户名
		'password' => '8641683',//数据库密码
		'database' => 'xunji',
	),
	'view' => array(
		'enabled' => TRUE, // 开启视图
		'config' =>array(
			'template_dir' => APP_PATH.'/tpl', // 模板目录
			'compile_dir' => APP_PATH.'/tmp', // 编译目录
			'cache_dir' => APP_PATH.'/tmp', // 缓存目录
			'left_delimiter' => '<{',  // smarty左限定符
			'right_delimiter' => '}>', // smarty右限定符
		),
		),
);

require(SP_PATH."/SpeedPHP.php");
import(APP_PATH . '/controller/xunji.php');
spRun();