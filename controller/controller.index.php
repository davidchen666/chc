<?php
/**
 * Copyright © 大猩猩
 * SDK中间api类
 * Author 大猩猩
 * Create 18-02-22 14:34
 */
class IndexController extends Controller
{
    private $model;
    private $_api;
    private $title;
    const M = "Index";

    function __construct()
    {
        $this->model = Model::instance(self::M);
        $this->title='首页';
    }

    /**
     * 首页
     */
    function index()
    {
        $data = array();
        if(Session::instance()->get('username') && Session::instance()->get('userid')){
            View::instance('index/index.tpl')->show($data);
        } else{
            header("location: ?m=index&a=login");
        }
    }

    /**
     * login
     */
    function login()
    {
        $data = array();
        Session::instance()->set('username', '');
        Session::instance()->set('userid', '');
        View::instance('index/login.tpl')->show($data);
    }

    /*
        ######################## API ##########################
    */

    function verifyLogin(){
        $pData = getData();
        $res = $this->model->verifyLogin($pData);
        $resArr = json_decode($res,true);
        if($resArr['resCode'] === 200){
            Session::instance()->set('username', $resArr['resData']['username']);
            Session::instance()->set('userid', $resArr['resData']['userid']);
        }
        echo $res;
        
    }

    function uploadFile()
    {
        $targetFolder = 'iresearch_ui/public/uploads';
        if (!empty($_FILES)) {
            $tempFile = $_FILES['Filedata']['tmp_name'];
            $targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
            $targetFile = rtrim($targetPath, '/') . '/' . $_FILES['Filedata']['name'];
            echo $targetFile;
            $fileTypes = array('xls', 'xlsx', 'jpg', 'jpeg', 'avi', 'mp4', 'rar', 'doc', 'docx', 'png');
            $fileParts = pathinfo($_FILES['Filedata']['name']);
            if (in_array($fileParts['extension'], $fileTypes)) {
                move_uploaded_file($tempFile, $targetFile);
                echo '上传成功';
            } else {
                echo '文件类型错误';
            }
        }
    }
}

?>