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
        // $name = "张三";
        // $data = array(
        //     'name'=>$name,
        //     'age'=>22,
        //     'addr'=>"上海"
        //     );
        $data['title'] = $this->title;
        // $getData = $this->model->index(5);
        // var_dump($getData);
        View::instance('index/index.tpl')->show($data);
        // echo to_success($getData);
    }

    function test2()
    {
        View::instance('index/test2.tpl')->show(array());
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