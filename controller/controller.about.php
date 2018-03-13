<?php
/**
 * Copyright © 大猩猩
 * SDK中间api类
 * Author 大猩猩
 * Create 18-02-22 14:34
 */
class AboutController extends Controller
{
    private $model;
    private $_api;
    private $title;
    private $data=array(
            'title'=>'关于我们',
            'about'=>'selected'
        );
    // const M = "Event
    function __construct()
    {
        // $this->model = Model::instance(self::M);
    }

    /**
     * 会议
     */
    function index()
    {
        $data = $this->data;
        View::instance('about/index.tpl')->show($data);
    }
    
}

?>