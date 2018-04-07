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
        $pData = getData();
        echo $this->model->addMSignUp($pData);
    }
    function addRSignUp(){
        $pData = getData();
        echo $this->model->addRSignUp($pData);
    }
    function uploadFile(){
        $file = $_FILES['Filedata'];
        $name = $file['name'];
        $type = $file['type'];
        $size = $file['size'];
        $tmp_name = $file['tmp_name'];
        $url = dirname(dirname(__FILE__))."/uploads/docFile/";//文件路径
        $pre_str = date("YmdHis",time()).'-'.rand(1,99999);
        $tmp_url = $url.$pre_str.$name;
        // date("YmdHis",time())+rand(1,99999);
        $tpname = substr(strrchr($name,'.'),1);//获取文件后缀
        // $types = array('jpg','png','jpeg','bmp','gif');
        $types = array('ppt','pptx','pdf');
        $filesize = 1024 * 1024 * 100;
        if($size > $filesize){
            //              echo "<script>alert('退出成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
            // echo "'文件过大!";
            echo to_error("文件过大!");
            exit;
        }else if(!in_array($tpname,$types)){
            // echo "文件类型不符合!";
            echo to_error("文件类型不符合!");
            exit;
        }else if(!move_uploaded_file($tmp_name,$tmp_url)){
            // echo "移动文件失败!";
            echo to_error("移动文件失败!(请检查文件名是否合法)");
            exit;
        }else{
            move_uploaded_file($tmp_name,$tmp_url);
            $size = round($size/1024/1024,2); //转换成Mb
            $upload = array('size' => $size, 'url' => $tmp_url, 'name' => $name,'newname'=>$pre_str.$name, 'type' => $tpname);
            // return $upload;
            echo to_success($upload);
        }
    }
}

?>