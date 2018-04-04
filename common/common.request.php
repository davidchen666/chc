<?php 
/**
 * Copyright © 
 * 处理请求参数
 * request 类
 * Author 
 * Create 13-11-15 09:45
 */
class Request {
    private $filter = null;

    private function _filter(&$array){
        $filter = $this->filter;
        if(is_array($filter)){//如果是布尔型并且为真则去除所有空字符串类型的数值
            foreach($filter as $k=>$v){
                if(is_array($v) && $k == 'params'){
                    foreach($array as $kk=>$vv){
                        if(in_array($kk,$v)){
                            unset($array[$kk]);
                        }
                    }
                }elseif($k == 'empty'){
                    foreach($array as $kk=>$vv){
                        if(!strlen($vv)){
                            unset($array[$kk]);
                        }
                    }
                }
            }
        }elseif(is_string($filter)){
            if($filter == 'empty'){
                foreach($array as $k=>$v){
                    if(!strlen($v)){
                        unset($array[$k]);
                    }
                }
            }
        }
    }
    public function filter($filter){
        $this->filter = $filter;

        return $this;
    }

    static public function instance(){
        return new self();
    }
    
	private function _fetch_from_array(&$array, $index = '' ,$default = null)
	{
		if ( ! isset($array[$index]))
		{
			return $default;
		}

		return $array[$index];
	}


	public function get($index = '', $default = null)
	{
        $this->_filter($_GET);
        if($index){
		    return $this->_fetch_from_array($_GET, $index, $default);
        }else{
            return $_GET;
        }
	}


	public function post($index = '', $default = null)
	{
        $this->_filter($_POST);
        if($index){
		    return $this->_fetch_from_array($_POST, $index, $default);
        }else{
            return $_POST;
        }
	}


    // public function request($index = '', $default = null)
	public function __construct($index = '', $default = null)
	{
        $this->_filter($_GET);
        $this->_filter($_POST);
        if(!$index){
            return $_REQUEST;
        }

		if ( ! isset($_POST[$index]))
		{
			return $this->get($index, $default);
		}
		else
		{
			return $this->post($index, $default);
		}
	}


	public function isRequest($method) {
		$request_method = $_SERVER['REQUEST_METHOD'];
		if($request_method==$method){
			return true;
		}
		return false;
	}

	public function isPost() {
		$request_method = $_SERVER['REQUEST_METHOD'];
		if($request_method=='POST'){
			return true;
		}
		return false;
	}

	public function isGet() {
		$request_method = $_SERVER['REQUEST_METHOD'];
		if($request_method=='GET'){
			return true;
		}
		return false;
	}

    public function isAjax() {
        return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest');
    }


	public function server($index = '', $default='')
	{
        $this->_filter($_SERVER);
        if(!$index){
            return $_SERVER;
        }

		return $this->_fetch_from_array($_SERVER, $index,$default);
	}

}