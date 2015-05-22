<?php
/**
 * Copyright © 艾瑞咨询集团(http://www.iresearch.com.cn/)
 * 外部接口soap调用
 * Author Zhangwenjun <zhangwenjun@iresearch.com.cn>
 * Create 14-04-10 16:53
 */
header('Content-Type: text/html; charset=UTF-8');
class Soap{
    const  URL = 'http://ioa.itracker.cn/WebService/index.asmx';
    private $_soap = null;
    public function __construct(){

    }
    //取得用户新消息数
    public function getUserInboxNewCount(){
        $uid = $this->userId();
//        $info = $this->_soap->InboxNewCount(array('Userid'=>$uid));
//        if(isset($info->InboxNewCountResult)){
//            return $info->InboxNewCountResult;
//        }else{
//            return 0;
//        }
    }
    public function getUserInfo(){
        $guid = Session::instance()->get('guid');
        if(empty($guid)){
            return false;
        }
        $this->_soap = new SoapClient(self::URL . "?WSDL");
        $userinfo = $this->_soap->UserInfo(array('strGUID'=>$guid));
        if(isset($userinfo->UserInfoResult)){
            return $userinfo->UserInfoResult;
        }else{
            return false;
        }
    }
    //检查邮箱是否存在，传入数组，或传出错误帐号
    public function checkMail($mailstr){
        $mailarr = explode(",", $mailstr);
        $rsArray = array();
        for($i=0;$i<count($mailarr);$i++){
            if(substr($mailarr[$i],0,2)=='*@'){
                if($this->checkCompanyMail(substr($mailarr[$i],1,strlen($mailarr[$i])))){

                }
                else {
                    $rsArray[]=$mailarr[$i];
                }
            }
            else {
                if($this->checkUserMail($mailarr[$i])){
                }
                else {
                    $rsArray[]=$mailarr[$i];
                }
            }
        }
        return $rsArray;
    }
    public function checkUserMail($user_mail){
        $this->_soap = new SoapClient(self::URL . "?WSDL");
        $rs = $this->_soap->UserNameMailIS(array('Mailusername'=>$user_mail));
        if($rs->UserNameMailISResult){
            return true;
        }else{
            return false;
        }
    }
    public function checkCompanyMail($com_mail){
        $this->_soap = new SoapClient(self::URL . "?WSDL");
        $rs = $this->_soap->CompanyMailVerify(array('CompanyMail'=>$com_mail));
        if($rs->CompanyMailVerifyResult){
            return true;
        }else{
            return false;
        }
    }
    public function getCompanyInfo(){
        $guid = Session::instance()->get('guid');
        if(empty($guid)){
            return false;
        }
        $this->_soap = new SoapClient(self::URL . "?WSDL");
        $userinfo = $this->_soap->UserInfo(array('strGUID'=>$guid));
        if(isset($userinfo->UserInfoResult)){
            $userinfo->UserInfoResult;
            $companyinfo = $this->_soap->CompanyInfo(array('Comid'=>$userinfo->UserInfoResult->CompanyID));
            if(isset($companyinfo->CompanyInfoResult)){
                return $companyinfo->CompanyInfoResult;
            }
        }else{
            return false;
        }
    }
    public function getUserInfoCompany(){
        $guid = Session::instance()->get('guid');
        if(empty($guid)){
            return false;
        }
        $this->_soap = new SoapClient(self::URL . "?WSDL");
        $userinfo = $this->_soap->UserInfo(array('strGUID'=>$guid));
        $rs_array['UserName']=$userinfo->UserInfoResult->UserName;
        $rs_array['mobile']=$userinfo->UserInfoResult->Mobile;
        $rs_array['TrueName']=$userinfo->UserInfoResult->TrueName;
        $rs_array['Userid']=$userinfo->UserInfoResult->Userid;
        $rs_array['mobile']=$userinfo->UserInfoResult->Mobile;

        if(isset($userinfo->UserInfoResult)){
            $userinfo->UserInfoResult;
            $companyinfo = $this->_soap->CompanyInfo(array('Comid'=>$userinfo->UserInfoResult->CompanyID));
            if(isset($companyinfo->CompanyInfoResult)){
                $cominfo= $companyinfo->CompanyInfoResult;
            }
        }else{
            $cominfo="";
        }
        $rs_array['CompanyName']= $cominfo->CompanyName;
        $rs_array['CompanyType']= $cominfo->CompanyType;
        $rs_array['CompanyID']= $cominfo->CompanyID;
        return $rs_array;
    }
    public function isLogin(){
        $uid = Session::instance()->get('uid');
        $com = $_SERVER['HTTP_REFERER'];
        $pos = strpos($com, 'guid');
        if($pos > 0){
            $uid = '';
        }
        if(!empty($uid)){
            return true;
        }
        $user = $this->getUserInfo();
        if($user != false){
            $ivt = array();
            $d_date = $user->BuyProduct->ArrayOfString;
            foreach($d_date as $v){
                $v = get_object_vars($v);
                if($v['string'][0] == 400){
                    $ivt = $v['string'];
                }
            }
            Session::instance()->set('uid', $user->Userid);
            Session::instance()->set('company', $user->CompanyName);
            Session::instance()->set('true_name', $user->TrueName);
            Session::instance()->set('user_name', $user->UserName);
            Session::instance()->set('mobile', !empty($user->Mobile) ? $user->Mobile : $user->Phone);
            Session::instance()->set('end_date', date('Y年m月d日', strtotime($ivt[3])));
            return true;
        }
            Session::instance()->delete('uid');
            return false;

    }

    public function userId(){
        $user = $this->getUserInfo();
        if($user != false){
            return $user->Userid;
        }
    }

}
//$soap = new Soap();
//print_r($soap->userId());

?>
