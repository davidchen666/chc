<?php
/**
 * Copyright © 艾瑞咨询集团(http://www.iresearch.com.cn/)
 * SDK中间api类
 * Author DavidWei <davidwei@iresearch.com.cn>
 * Create 15-03-12 14:34
 */
	class IndexController extends Controller{

		private $model;
        private $_api;
        function __construct(){
			
        }
        /**
         * 前端框架demo
         */
        function index(){
            $data=array();
            View::instance('index/index.tpl')->show($data);
        }
	}

?>