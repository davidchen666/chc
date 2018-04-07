<?php

class EventsModel extends AgentModel
{
    public function addMSignUp($data){
    	return curl_request(API_PATH.'m=events&a=addMSignUp',$data);
    }
    public function addRSignUp($data){
    	return curl_request(API_PATH.'m=events&a=addRSignUp',$data);
    }
}