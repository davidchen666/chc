<?php
/**
 * Copyright © 艾瑞咨询集团(http://www.iresearch.com.cn/)
 * 基础Controller类
 * Author Zhangwenjun <zhangwenjun@iresearch.com.cn>
 * Create 13-11-15 09:45
 */

class Controller{
	

    private $curr_class;
    static $_mysql = null;
    public function __construct($classname){
        $this->curr_class = $classname;
    }

    public function __call($fun,$arg){
        echo '{"statusCode":"300","message":"对不起，您访问的控制器不存在！'.$this->curr_class.'::'.$fun.'"}';
        exit;
    }

    final static public function instance($controller){

        static $instances = array();

        if (! isset($instances[$controller]))
        {
            $controller = strtolower($controller);
            if (file_exists(CONTROLLER_PATH . CONTROLLER . '.' . $controller . '.php')){
                include_once CONTROLLER_PATH . CONTROLLER . '.' . $controller . '.php';
            }else{
                p('Controller not found in file:'. CONTROLLER . '.' . $controller.'.php');
            }
            $classname = $controller.'Controller';
            $classname = ucwords($classname);
            $instances[$controller] = new $classname($classname);
        }
        return $instances[$controller];
    }

    //$db database $opr 'S' read,'M' write
    final public function mydb($db = '', $opr = 'S') {

        include_once(LIB_PATH . LIB . '.mysqlroutrule.php');

        include_once(LIB_PATH . LIB . '.mydb.php');

        $arrcon = MysqlRoutRule::Rout($opr);

        $db = $db ? $db : $arrcon['db'];

        if(null === self::$_mysql){
            self::$_mysql = new MyDb($arrcon['host'],$arrcon['user'],$arrcon['pass'],$db);
        }

        return self::$_mysql;

    }

    protected function error($msg = '参数错误'){
        $arr = array(
            'ret'=>-1,
            'msg'=>$msg,
            'content'=>'null'
        );
        echo json_encode($arr);
        die;
    }

    protected function success($content){
        $arr = array(
            'ret'=>0,
            'msg'=>'ok',
            'content'=>$content
        );
        echo json_encode($arr);
        die;
    }

    final public function request(){
        return Request::instance();
    }

    final public function session(){
        return Session::instance();
    }

    final public function cookie(){
        return Cookie::instance();
    }

    public function model($model = null){

        $model = $model === null ? $this->curr_class : $model;

        return Model::instance($model);
    }

    protected function setSessId($id){
        $this->session()->del('id');
        $this->session()->set('id', $id);
    }
    protected function delSessCondition(){
        $this->session()->del('condition');
        $this->session()->del('tid');
    }
    public function getUserInboxNewCount(){
        //$api = new Soap();
        //return  $api->getUserInboxNewCount();
        return 4;
    }
}

?>