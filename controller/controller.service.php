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
        $this->model = Model::instance("service");
    }

    /**
     * 获得省市
     */
    public function listProCity(){
        $rs = $this->model->listProCity();
        if (count($rs) != 0) {
            echo $this->success($rs);
        } else {
            echo $this->error('提交错误', $rs);
        }
    }
    public function listProCityIndex(){
        $rs = $this->model->listProCityIndex();
        if (count($rs) != 0) {
            echo $this->success($rs);
        } else {
            echo $this->error('提交错误', $rs);
        }
    }
     /**
     * 增加文件
     */
    public function addMedia(){
        $rs = $this->model->addMedia();
        echo $rs;
    }
   /**
     * 增加文章
     */
    public function addArticle(){
        $rs = $this->model->addArticle();
        echo $rs;
    }

    /**
     * 文章上传
     */
    function uploadFile()
    {
        $rs = $this->model->uploadUserFile();
        echo $rs;
    }
}