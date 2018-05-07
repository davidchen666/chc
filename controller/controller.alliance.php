<?php
/**
 * Copyright © 大猩猩
 * SDK中间api类
 * Author 大猩猩
 * Create 18-02-22 14:34
 */
class AllianceController extends Controller
{
    private $model;
    private $_api;
    private $title;
    private $data=array(
            'title'=>'产品联盟',
            'alliance'=>'active',
            'imgPath'=>IMG_PATH
        );
    const M = "News";
    function __construct()
    {
        $this->model = Model::instance(self::M);
    }

    /**
     * 产品联盟
     */
    function index()
    {
        $data = $this->data;
        View::instance('alliance/index.tpl')->show($data);
    }

    //新闻详情
    function newsDetail(){
        $data = $this->data;
        View::instance('alliance/news_detail.tpl')->show($data);
    }

    //获取新闻
    function getNewsData(){
        $pData = getData();
        echo $this->model->getNewsData($pData);
    }
    
}

?>