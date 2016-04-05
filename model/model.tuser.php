<?php

class TuserModel extends AgentModel
{

    public function getRole($where, $curpage = 1, $perpage = __PAGENUM__)
    {
//        pr($where);
        $subsql = '';
        $subsqll = '';
        $start_limit = ($curpage - 1) * $perpage;

        if (!empty($where['search'])) {
            $subsql .= " and tuser.login_name like '%{$where['search']}%'";
        };
        if (!empty($where['tr_id'])) {
            $subsql .= " and tuserrolerelation.tr_id={$where['tr_id']}";
        };
        $subsql .= " order by {$where['orderColumn']} {$where['orderType']}";
        $subsqll .= " limit $start_limit, $perpage";
        $sql = "select * FROM tuser INNER JOIN tuserrolerelation ON tuser.tu_id = tuserrolerelation.tu_id WHERE 1=1 " . $subsql . $subsqll;


        $ret = $this->mysqlQuery($sql, "all");
        $sqltotal = "select * FROM tuser INNER JOIN tuserrolerelation ON tuser.tu_id = tuserrolerelation.tu_id WHERE 1=1 " . $subsql;
        $rettotal = $this->mysqlQuery($sqltotal, "all");
        return array('total' => count($rettotal), 'list' => array_merge($ret));


    }

    public  function getUser($where){
        $subsql = "";
        if (!empty($where['login_name'])) {
            $subsql .= " AND login_name= '{$where['login_name']}'";

        };
        $sql = "SELECT * FROM tuser WHERE 1 = 1 " . $subsql;
//        echo $sql;
        return $this->mysqlQuery($sql, "all");
    }

//    public function getRole($where)
//    {
////        pr($where['parent_tr_id']);
//        $subsql = "";
//        if (!empty($where['tu_id'])) {
//            $subsql .= " AND tuserrolerelation.tu_id = {$where['tu_id']}";
//
//        };
//        $sql = "SELECT trole.tr_id,trole.parent_tr_id,trole.role_name,trole.gen_time,trole.description FROM tuserrolerelation INNER JOIN trole ON tuserrolerelation.tr_id = trole.tr_id WHERE 1 = 1 " . $subsql;
////        echo $sql;
//        return $this->mysqlQuery($sql, "all");
//
//    }

    public function getRoleData($where)
    {
        $subsql = "";

        if ($where['parent_tr_id'] == 0) {
            $subsql .= " AND parent_tr_id = {$where['parent_tr_id']}";
        } else {
            $subsql .= " AND parent_tr_id !=0";
        };
        $sql = "SELECT * FROM trole  WHERE 1 = 1 " . $subsql;
//        echo $sql;
        return $this->mysqlQuery($sql, "all");

    }

    public function getRight($where)
    {
        $psql = "SELECT tright.tr_id,tright.parent_tr_id,tright.right_name,tright.description FROM tright INNER JOIN tuserrightrelation ON tright.tr_id = tuserrightrelation.tr_id WHERE 1 = 1 AND tuserrightrelation.tu_id={$where['tu_id']} and tright.parent_tr_id=0";
        $sql = "SELECT tright.tr_id,tright.parent_tr_id,tright.right_name,tright.description FROM tright INNER JOIN tuserrightrelation ON tright.tr_id = tuserrightrelation.tr_id WHERE 1 = 1 AND tuserrightrelation.tu_id={$where['tu_id']}";
        $ret['parent'] = $this->mysqlQuery($psql, "all");
        $ret['tr'] = $this->mysqlQuery($sql, "all");

        return $ret;

    }

    public function getTroleRight($where)
    {
        $psql = "SELECT tright.tr_id,tright.parent_tr_id,tright.right_name,tright.description FROM tuserrolerelation INNER JOIN trole ON tuserrolerelation.tr_id = trole.tr_id INNER JOIN trolerightrelation ON trolerightrelation.Role_id = trole.tr_id ,tright WHERE 1 = 1 AND tuserrolerelation.tu_id = {$where['tu_id']} and tright.parent_tr_id=0";
        $sql = "SELECT tright.tr_id,tright.parent_tr_id,tright.right_name,tright.description FROM tuserrolerelation INNER JOIN trole ON tuserrolerelation.tr_id = trole.tr_id INNER JOIN trolerightrelation ON trolerightrelation.Role_id = trole.tr_id ,tright WHERE 1 = 1 AND tuserrolerelation.tu_id = {$where['tu_id']}";
        $ret['parent'] = $this->mysqlQuery($psql, "all");
        $ret['tr'] = $this->mysqlQuery($sql, "all");
//        pr($where);
        return $ret;

    }

}