<?php
/**
 * Created by 艾瑞咨询集团.
 * User: DavidWei
 * Date: 16-3-2
 * Time: 下午4:31
 * Email:davidwei@iresearch.com.cn
 * FileName:controller.service.php
 * 描述:
 */

class ServiceController extends Controller
{
    private $model;
    private $_api;

    function __construct()
    {

    }

    /**
     * 获得省市
     */

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