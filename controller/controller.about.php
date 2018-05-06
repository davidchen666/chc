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
            'about'=>'active',
            'imgPath'=>IMG_PATH
        );
    const M = "About";
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
        // $rsData = $this->model->getPage(array('id' => '1'));
        // $rsArr = json_decode($rsData,true);
        // var_dump($rsData);
        // var_dump($rsArr);
        // die();
        // if($rsArr['resCode'] === 200){
        //     $data['data'] = $rsArr['resData'][0];
            
            // $data['img_url'] = WEBSITE_SOURCE_URL+'/img/about/banner-00.png';
            // var_dump($data);die();
            View::instance('about/index.tpl')->show($data);
        // }
    }

    //接口
    public function getPage($pData){
        $pData = getData();
        echo $this->model->getPage($pData);
    }
    
}

?>