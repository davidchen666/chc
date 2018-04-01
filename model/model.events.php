<?php

class EventsModel extends AgentModel
{
    public function addMSignUp($data){
    	return curl_request(API_PATH.'m=events&a=addMSignUp',$data);
    	// var_dump(API_PATH.'m=events&a=addMSignUp');
    	// echo $r_data;
        // return $r_data;
    }

}