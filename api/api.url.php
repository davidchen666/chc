<?php
/**
 * Copyright © 艾瑞咨询集团(http://www.iresearch.com.cn/)
 * 接口请求地址基础配置类
 * Author Zhangwenjun <zhangwenjun@iresearch.com.cn>
 * Create 14-03-05 11:21
 */
class Url{
    const URL = "http://10.10.31.55//mgt_redis/?";
    protected  $_apiMap = null;
    public function __construct(){
        //调用方法 、url地址、 必填参数、 请求方法、返回格式
        $this->_apiMap = array(
	        /*
	         *条件部分,根据条件取得所有数据 
	         */
	        'get_all_list'=>array(self::URL .'m=base&a=getAllList', array(), 'GET', 'JSON'),
        	'get_last_date'=>array(self::URL .'m=base&a=getLastDate', array(), 'GET', 'JSON'),
        	'get_exec'=>array(self::URL .'m=base&a=getExec', array(), 'GET', 'JSON'),
        );
    }
}
?>
