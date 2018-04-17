<?php
/**
 * Copyright © 大猩猩
 * SDK中间api类
 * Author 大猩猩
 * Create 18-02-22 14:34
 */
class MediaController extends Controller
{
    private $model;
    private $_api;
    private $title;
    private $data=array(
            'title'=>'医疗媒体',
            'media'=>'selected'
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
        View::instance('media/index.tpl')->show($data);
    }
    
}

?>