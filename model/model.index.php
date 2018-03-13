<?php

class IndexModel extends AgentModel
{
    public function index($data){
        $sql = "select * from chc_site_page where id={$data}";
        $res = $this->mysqlQuery($sql, "all");
        return $res;
    }

}