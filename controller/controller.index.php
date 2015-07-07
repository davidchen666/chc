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
        function uploadFile(){
            $targetFolder = 'iresearch_ui/public/uploads';
            if (!empty($_FILES)) {
                $tempFile = $_FILES['Filedata']['tmp_name'];
                $targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
                $targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];
                echo $targetFile;
                $fileTypes = array('xls','xlsx');
                $fileParts = pathinfo($_FILES['Filedata']['name']);
                if (in_array($fileParts['extension'],$fileTypes)) {
                    move_uploaded_file($tempFile,$targetFile);
                    echo '上传成功';
                } else {
                    echo '文件类型错误';
                }
            }
        }
	}

?>