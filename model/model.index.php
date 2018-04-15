<?php

class IndexModel extends AgentModel
{
    public function verifyLogin($data){
    	return curl_request(API_PATH.'m=index&a=verifyLogin',$data);
    }

}