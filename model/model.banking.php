<?php

class BankingModel extends AgentModel
{
    public function addBankingSignUp($data){
    	return curl_request(API_PATH.'m=banking&a=addBankingSignUp',$data);
    }
}
