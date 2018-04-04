<?php
/**
 * Copyright © 大猩猩
 * SDK中间api类
 * Author 大猩猩
 * Create 18-02-22 14:34
 */
class EventsController extends Controller
{
    private $model;
    private $_api;
    private $title;
    private $data=array(
            'title'=>'品牌会议',
            'events'=>'active'
        );
    const M = "Events";
    function __construct()
    {
        $this->model = Model::instance(self::M);
    }

    /**
     * 会议
     */
    function index()
    {
        $data = $this->data;
        View::instance('events/index.tpl')->show($data);
    }

    /**
     * 会议详情
     */
    function detail()
    {
        $data = $this->data;
        $data['detail'] = 'activemenu';
        View::instance('events/events_detail.tpl')->show($data);
    }

    /**
     * 会议详情-关于会议
     */
    function about()
    {
        $data = $this->data;
        $data['about'] = 'activemenu';
        View::instance('events/events_about.tpl')->show($data);
    }

    /**
     * 会议详情-会议日程
     */
    function schedule()
    {
        $data = $this->data;
        $data['schedule'] = 'activemenu';
        View::instance('events/events_schedule.tpl')->show($data);
    }

    /**
     * 会议详情-演讲嘉宾
     */
    function speaker()
    {
        $data = $this->data;
        $data['speaker'] = 'activemenu';
        View::instance('events/events_speaker.tpl')->show($data);
    }

    /**
     * 会议详情-会议酒店
     */
    function hotel()
    {
        $data = $this->data;
        $data['hotel'] = 'activemenu';
        View::instance('events/events_hotel.tpl')->show($data);
    }

    /**
     * 会议详情-历届回顾
     */
    function review()
    {
        $data = $this->data;
        $data['review'] = 'activemenu';
        View::instance('events/events_review.tpl')->show($data);
    }

    /**
     * 会议详情-参会报名
     */
    function mSignUp()
    {
        $data = $this->data;
        $data['mSignUp'] = 'activemenu';
        View::instance('events/events_mSignUp.tpl')->show($data);
    }

    /**
     * 会议详情-路演报名
     */
    function rSignUp()
    {
        $data = $this->data;
        $data['rSignUp'] = 'activemenu';
        View::instance('events/events_rSignUp.tpl')->show($data);
    }

    /*
        api 相关
    */
    function addMSignUp(){
        //获取post值
        $pData = json_decode(file_get_contents("php://input"),true);
        // var_dump($this->request()->get('countNum'));
        // var_dump($_REQUEST);
        // var_dump($pData);
        // if(!$pData){
        //     $pData = $_REQUEST;
        // }
// var_dump($pData);
// die();
        echo $this->model->addMSignUp($pData);
        // echo $pData;
        // var_dump(112);

    }
}

?>