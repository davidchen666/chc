<?php

class EventsModel extends AgentModel
{
	public function getLastEvents(){
		return curl_request(API_PATH.'m=events&a=getLastEvents',$data);
	}

    public function addMSignUp($data){
    	return curl_request(API_PATH.'m=events&a=addMSignUp',$data);
    }

    public function addRSignUp($data){
    	return curl_request(API_PATH.'m=events&a=addRSignUp',$data);
    }
    
    public function getEventsInfoById($data){
    	return curl_request(API_PATH.'m=events&a=getEventsInfoById',$data);
    }
}