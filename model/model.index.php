<?php

class IndexModel extends AgentModel
{
    public function index($data){
    	$data = curl_request(API_PATH.'m=events&a=mSignUp');
    	
        $sql = "select * from chc_site_page where id={$data}";
        $res = $this->mysqlQuery($sql, "all");
        return $res;
    }

}