<?php
date_default_timezone_set("PRC");
session_set_cookie_params(0);
//    set_time_limit(0);
//基础路径配置1234555
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', dirname(__FILE__) . DS);
// define('ROOT_PATH', 'http://localhost\chc' . DS);
define('MODEL', 'model');
define('CONTROLLER', 'controller');
define('VIEW', 'view');
define('LIB', 'lib');
define('COMMON', 'common');
define('PUBLIC', 'public');
define('WIDGET', 'widget');
define('API', 'api');
define('LIB_PATH', ROOT_PATH . LIB . DS);
define('API_PATH', 'localhost/chc-api/index.php?');
// define('API_PATH', 'http://www1.chconsultant.com/chc-api/index.php?');
define('MODEL_PATH', ROOT_PATH . MODEL . DS);
define('CONTROLLER_PATH', ROOT_PATH . CONTROLLER . DS);
define('VIEW_PATH', ROOT_PATH . VIEW . DS);

define('UPLOAD_PATH', ROOT_PATH . '/public/uploads'); //接受上传目录    //站点配置
//	define('WEBSITE','http://localhost');
define('WEBSITE', $_SERVER['SERVER_ADDR']);
define('WEBSITE_URL', '');
define('WEBSITE_SOURCE_URL', WEBSITE_URL . 'public');
define('WEBSITE_TITLE', 'MVC');
define('IMG_PATH', 'http://' . $_SERVER['HTTP_HOST'] . '/chc-api/uploads');
// define('IMG_PATH', 'http://www1.chconsultant.com/chc-api/uploads');
// var_dump($_SERVER);die();
//导出报表配置
//define('EXPORT_PIC','http://203.156.255.148:81/chart.php');
// define('EXPORT_PIC', 'http://180.169.19.166/graph_api/chart.php');
//页面条数
define("__PAGENUM__", 10);
//session 前缀
define('SITE_PREFIX', 'idex');
//session 失效时间
define('SESSION_TIME_OUT', false);
//cookie 失效时间
define('COOKIE_TIME_OUT', 7 * 24 * 3600);
//下拉框
define('SELECT_HOUR', 24 * 3600);
define('SELECT_DAY', 30 * 86400);
define('KEY', '534b44a19bf18d20b71ecc4eb77c572f');
//cookie 域名
define('COOKIE_DOMAIN', '');
//是否开启缓存
define('CACHE_ON', false);
//是否开启调试
define('DEBUG', false || isset($_GET['debug']));
define('START_TIME', microtime(true));

define('NOW', date('Y-m-d H:i:s'));
if (DEBUG) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL ^ E_NOTICE);

} else {
    error_reporting(0);
}

//是否开启Rewrite
define('REWRITE_ON', false);

define('CHARSET', 'utf-8');

header("Content-type: text/html; charset=" . CHARSET);

//引用类文件
require_once(ROOT_PATH . COMMON . DS . COMMON . '.fun.php');
require_once(ROOT_PATH . COMMON . DS . COMMON . '.request.php');
require_once(ROOT_PATH . COMMON . DS . COMMON . '.session.php');
require_once(ROOT_PATH . COMMON . DS . COMMON . '.response.php');
require_once(ROOT_PATH . COMMON . DS . COMMON . '.cookie.php');
require_once(ROOT_PATH . COMMON . DS . COMMON . '.page.php');
require_once(ROOT_PATH . COMMON . DS . COMMON . '.ajaxpage.php');

require_once(ROOT_PATH . API . DS . API . '.api.php');
require_once(ROOT_PATH . API . DS . API . '.soap.php');

require_once(ROOT_PATH . LIB . DS . LIB . '.model.php');
require_once(ROOT_PATH . LIB . DS . LIB . '.agentmodel.php');
require_once(ROOT_PATH . LIB . DS . LIB . '.controller.php');
require_once(ROOT_PATH . LIB . DS . LIB . '.view.php');

$_request = Request::instance();

$v = $_request->get('v');
// if (!empty($v) && in_array($v, array('beta', 'test', 'final'))) {
//     define('VERSION', $v); //beta,test,final
// } else {
//     define('VERSION', 'test');
// }
//不可在浏览器中访问，只能在壳里
//    echo "
//    <SCRIPT LANGUAGE=\"JavaScript\">
//    	location.href='http://www.iresearch.com.cn/';
//    </SCRIPT>
//    ";
//
//登录处理

//Session::instance()->set('uid', 1);//游客使用
//   $soap = new Soap();
//   if(!$soap->isLogin()){
//      $guid = Session::instance()->get('guid');
//script("alert('登录超时');top.location.href='http://ird.itracker.cn/index.aspx?SLID=".$guid."'");
//  }
//    echo Session::instance()->get('uid');

?>