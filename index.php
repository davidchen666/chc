<?php
require_once("config.inc.php");
	
$file_name = basename(__FILE__,'.php');

$controller = $_request->get('m',$file_name);

$action = $_request->get('a','index');
//验证是否登录
//	$controller != 'login' && Controller::instance('login')->isLogin();
Controller::instance($controller)->{$action}();
?>