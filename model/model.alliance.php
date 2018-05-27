<?php

class AllianceModel extends AgentModel
{
    public function addAllianceSignUp($data){
    	return curl_request(API_PATH.'m=alliance&a=addAllianceSignUp',$data);
    }
}
