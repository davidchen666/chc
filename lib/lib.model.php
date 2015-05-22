<?php
/**
 * Copyright © 艾瑞咨询集团(http://www.iresearch.com.cn/)
 * 基础MODEL类
 * Author Zhangwenjun <zhangwenjun@iresearch.com.cn>
 * Create 13-11-15 09:45
 */

class Model {

	private $model;

	static  $_mysql = null;

    private $curr_class;
    
    public function __construct($classname){
		$this->curr_class = $classname;
    }

    public function __call($fun,$arg){
        echo '{"statusCode":"300","message":"对不起，您访问的模型不存在！'.$this->curr_class.'::'.$fun.'"}';
        exit;
    }

    static public function instance($model)
    {
        static $instances = array();

        if (! isset($instances[$model]))
        {
            $model = strtolower($model);
            if (file_exists(MODEL_PATH . MODEL . '.' . $model . '.php')){
                include_once MODEL_PATH . MODEL . '.' . $model . '.php';
            }else{
                p('Model not found in file:'. MODEL . '.' . $model.'.php');
            }
            $classname = $model.'Model';
            $classname = ucwords($classname);
            $instances[$model] = new $classname($classname);
        }
        return $instances[$model];
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

	protected function data_unset() {

		self::$_mysql = null;

	}


	final public function session(){
        return Session::instance();
    }
	
	final public function request(){
        return Request::instance();
    }


}

?>