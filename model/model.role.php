<?php

class RoleModel extends AgentModel
{

    public function getRoleList($where, $curpage = 1, $perpage = __PAGENUM__)
    {
//        pr(__PAGENUM__);
        $subsql = '';
        $subsqll = '';
        $start_limit = ($curpage - 1) * $perpage;
//pr($where);
        if (!empty($where['search'])) {
            $subsql .= " and role_name like '%{$where['search']}%'";
        };
        if (!empty($where['tr_id'])) {
            $subsql .= " and parent_tr_id={$where['tr_id']}";
        };
        $subsql .= " order by {$where['orderColumn']} {$where['orderType']}";
        $subsqll .= " limit $start_limit, $perpage";
        $sql = "select * FROM trole  WHERE 1=1 " . $subsql . $subsqll;
//echo $sql;

        $ret = $this->mysqlQuery($sql, "all");
        $sqltotal = "select * FROM trole  WHERE 1=1 " . $subsql;
        $rettotal = $this->mysqlQuery($sqltotal, "all");
//        pr($ret);
        return array('total' => count($rettotal), 'list' => array_merge($ret));


    }

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

}