<?php
/**
 * Copyright © 大猩猩
 * SDK中间api类
 * Author 大猩猩
 * Create 18-02-22 14:34
 */
class ServicesController extends Controller
{
    private $model;
    private $_api;
    private $title;
    private $data=array(
            'title'=>'咨询服务',
            'services'=>'active',
            'imgPath'=>IMG_PATH
        );
    const M = "About";
    function __construct()
    {
        $this->model = Model::instance(self::M);
    }

    /**
     * 咨询服务
     */
    // function index()
    // {
    //     $data = $this->data;
    //     View::instance('services/index.tpl')->show($data);
    // }

    //精准人才
    function person()
    {
        $data = $this->data;
        View::instance('services/person.tpl')->show($data);
    }

    //产品注册
    function register()
    {
        $data = $this->data;
        View::instance('services/register.tpl')->show($data);
    }

    //园区规划
    function plan()
    {
        $data = $this->data;
        $data['img_url'] = WEBSITE_SOURCE_URL . '/img/about/banner-001.png';
        View::instance('services/plan.tpl')->show($data);
    }
    
}

?>