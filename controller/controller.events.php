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
            'title'=>'CHC医疗咨询-品牌会议',
            'events'=>'active',
            'imgPath'=>IMG_PATH
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

    /*#######################################################
      ######################  api 接口 ######################
    */#######################################################

    //获取最新的两个上线会议
    function getLastEvents(){
        echo $list = $this->model->getLastEvents();
    }

    //会议报名
    function addMSignUp(){
        $pData = getData();
        if(Session::instance()->get('code') != $pData['verify_code']){
            echo to_error('验证码不正确');
            exit();
        }
        echo $this->model->addMSignUp($pData);
    }

    //路演报名
    function addRSignUp(){
        $pData = getData();
        echo $this->model->addRSignUp($pData);
    }

    //生成验证码
    function getVerifyCode(){
        $val = rand(1000,9999);
        Session::instance()->set('code',$val);
        echo to_success(array(
            'code' => $val
        ));
    }

    // //上传计划书
    // function uploadFile(){
    //     // var_dump($_FILES);
    //     if(!$_FILES['Filedata']){
    //         echo to_error("未获取到文件!");
    //         exit;
    //     }
    //     $file = $_FILES['Filedata'];
    //     $name = $file['name'];
    //     $type = $file['type'];
    //     $size = $file['size'];
    //     $tmp_name = $file['tmp_name'];
    //     $url = dirname(dirname(__FILE__))."/uploads/docFile/";//文件路径
    //     $pre_str = date("YmdHis",time()).'-'.rand(1,99999);
    //     $tmp_url = $url.$pre_str.$name;
    //     // date("YmdHis",time())+rand(1,99999);
    //     $tpname = substr(strrchr($name,'.'),1);//获取文件后缀
    //     // $types = array('jpg','png','jpeg','bmp','gif');
    //     $types = array('ppt','pptx','pdf');
    //     $filesize = 1024 * 1024 * 100;
    //     if($size > $filesize){
    //         //              echo "<script>alert('退出成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
    //         // echo "'文件过大!";
    //         echo to_error("文件过大!");
    //         exit;
    //     }else if(!in_array($tpname,$types)){
    //         // echo "文件类型不符合!";
    //         echo to_error("文件类型不符合!");
    //         exit;
    //     }else if(!move_uploaded_file($tmp_name,$tmp_url)){
    //         // echo "移动文件失败!";
    //         echo to_error("移动文件失败!(请检查文件名是否合法)");
    //         exit;
    //     }else{
    //         move_uploaded_file($tmp_name,$tmp_url);
    //         $size = round($size/1024/1024,2); //转换成Mb
    //         $upload = array('size' => $size, 'url' => $tmp_url, 'name' => $name,'newname'=>$pre_str.$name, 'type' => $tpname);
    //         // return $upload;
    //         echo to_success($upload);
    //     }
    // }

    //上传计划书: 1,子文件夹名
    public function uploadFile($pathName='docFile'){
        if(!$_FILES['file']){
            echo to_error("未获取到文件!");
            exit;
        }
        if(!$pathName){
            return to_error("失败！缺少路径参数。");
            exit;
        }
        $url = dirname(dirname(__FILE__))."/uploads/".$pathName."/";//文件路径
        //检查路径是否存在
        if(!is_dir($url)){
            mkdir ($url,0777,true);
        }
        if(!is_dir($url)){
            return to_error("路径不存在。".$url);
            exit;
        }
        // var_dump($_FILES);
        $file = $_FILES['file'];
        $name = $file['name'];
        $type = $file['type'];
        $size = $file['size'];
        $tmp_name = $file['tmp_name'];
        
        $tpname = substr(strrchr($name,'.'),1);//获取文件后缀
        $pre_str = date("YmdHis",time()).'-'.rand(1,99999);
        // $tmp_url = $url.$pre_str.$name;
        //重新生成不包含中文的文件名称（要求不重合）
        $name = $pre_str.'.'.$tpname;
        $tmp_url = $url.$pre_str.$name;
        // date("YmdHis",time())+rand(1,99999);
        $types = array('ppt','pptx','pdf');
        // $types = array('jpg','png','jpeg','bmp','gif');
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
            // var_dump($tmp_name,$tmp_url);
            // var_dump($tmp_name,$tmp_url);
            echo to_error("移动文件失败!(请检查文件名是否合法)");
            exit;
        }else{
            move_uploaded_file($tmp_name,$tmp_url);
            $size = round($size/1024/1024,2); //转换成Mb
            $upload = array('size' => $size, 'url' => $tmp_url, 'name' => $name,'newname'=>$pre_str.$name, 'type' => $tpname);
            // var_dump($upload);
            // return $upload;
            echo to_success($upload);
        }
    }

    //获取首页信息
    function getEventsInfo(){
        $pData = getData();
        if(!$pData['events_id']){
            echo to_error('加载失败，不能获取到id');
        }else{
            echo $this->model->getEventsInfoById($pData);
        }
    }
}

?>