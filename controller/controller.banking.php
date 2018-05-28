<?php
/**
 * Copyright © 大猩猩
 * SDK中间api类
 * Author 大猩猩
 * Create 18-02-22 14:34
 */
class BankingController extends Controller
{
    private $model;
    private $_api;
    private $title;
    private $data=array(
            'title'=>'CHC医疗咨询-精准投行',
            'banking'=>'active'
        );
    const M = "Banking";
    function __construct()
    {
        $this->model = Model::instance(self::M);
    }

    /**
     * banking
     */
    function index()
    {
        $data = $this->data;
        View::instance('banking/index.tpl')->show($data);
    }

    /*#######################################################
      ######################  api 接口 ######################
    */#######################################################

    //提交计划书 addBankingSignUp
    function addBankingSignUp(){
        $pData = getData();
        echo $this->model->addBankingSignUp($pData);
    }
    
}

?>