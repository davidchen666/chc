<?php

class NewsModel extends AgentModel
{
    public function getNewsData($data){
    	return curl_request(API_PATH.'m=news&a=getNewsData',$data);
    }
}
