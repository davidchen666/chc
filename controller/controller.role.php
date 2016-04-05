<?php

/**
 * Copyright © 艾瑞咨询集团(http://www.iresearch.com.cn/)
 * SDK中间api类
 * Author GavinFei <gavinfei@iresearch.com.cn>
 * Create 16-3-16
 */
class RoleController extends Controller
{

    private $model;
    private $_api;

    function __construct()
    {
        $this->model = Model::instance('role');
    }


    function index()
    {
        $ret = $this->model->getRoleData(array('parent_tr_id' => 0));
        $data = array(
            'list' => $ret,
        );
        View::instance('role/index.tpl')->show($data);
    }

    function edit()
    {
        $data = array(

        );
        View::instance('role/edit.tpl')->show($data);
    }

    function getRoleList()
    {
        $where['tr_id'] = $this->request()->get('tr_id');
        $where['search'] = $this->request()->get('search');
        $where['curpage'] = $this->request()->get('page', 1);
        $where['orderColumn'] = $this->request()->get('orderColumn');
        $where['pagesize'] = $this->request()->get('pagesize', __PAGENUM__);
        $where['orderType'] = $this->request()->get('orderType', 'desc');
        $ret = $this->model->getRoleList($where, $where['curpage'], $where['pagesize']);
        $page = array(
            'current' => $where['curpage'],
            'pagesize' => $where['pagesize'],
            "total" => $ret['total']
        );
        echo Response::HTML((array('result' => $ret['list'], 'page' => $page)));
    }


}

?>