<?php

class AboutModel extends AgentModel
{
    public function getPage($data){
    	return curl_request(API_PATH.'m=about&a=getPageData',$data);
    }
}
