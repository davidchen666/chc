<?php

/**
 * Copyright © 艾瑞咨询集团(http://www.iresearch.com.cn/)
 * SDK中间api类
 * Author GavinFei <gavinfei@iresearch.com.cn>
 * Create 16-3-16
 */
class TuserController extends Controller
{

    private $model;
    private $_api;

    function __construct()
    {
        $this->model = Model::instance('tuser');
    }


    function index()
    {
        $ret = $this->model->getRoleData(array('parent_tr_id' => 0));
        $retP = $this->model->getRoleData(array('parent_tr_id' => $ret[0]['tr_id']));
//        pr($ret);
        $data = array(
            'list' => $ret,
            'listp' => $retP
        );
        View::instance('tuser/index.tpl')->show($data);
    }

    function edit()
    {
        $data = array();
        View::instance('tuser/edit.tpl')->show($data);
    }

    /**
     * 获取用户信息用户所有权限
     */
    function getUserInfo()
    {
        $where['login_name'] = $this->request()->get('name');
        $ret['tuser'] = $this->model->getUser($where);                    //用户信息

        $where['tu_id'] = $ret['tuser'][0]['tu_id'];
        $ret['trole'] = $this->model->getRole($where);                    //角色信息

        $retdescription['tuserright'] = $this->model->getRight($where);             //用户权限

        $retdescription['tusertroleright'] = $this->model->getTroleRight($where);  //角色权限
        $parent = array_merge($retdescription['tuserright']['parent'], $retdescription['tusertroleright']['parent']);//合并父权限
        foreach ($parent as $k => $v) {
            $parent[$k] = $parent[$k]['description'];
        }

        $ret['parent'] = array_unique($parent);//去重父权限
        $tr = array_merge($retdescription['tuserright']['tr'], $retdescription['tusertroleright']['tr']);
        foreach ($tr as $k => $v) {
            $tr[$k] = $tr[$k]['description'];
        }
        $ret['tr'] = array_unique($tr);
        pr($ret);
    }

    function getroledata()
    {
        $where['parent'] = $this->request()->post('parent_tr_id');

    }

    /**
     * 获取角色下所包含用户
     */
    function getRole()
    {
        $where['tr_id'] = $this->request()->get('tr_id');
        $where['search'] = $this->request()->get('search');
        $where['curpage'] = $this->request()->get('page', 1);
        $where['orderColumn'] = $this->request()->get('orderColumn');
        $where['pagesize'] = $this->request()->get('pagesize', __PAGENUM__);
        $where['orderType'] = $this->request()->get('orderType', 'desc');

        $ret = $this->model->getRole($where, $where['curpage'], $where['pagesize']);
        $page = array(
            'current' => $where['curpage'],
            'pagesize' => $where['pagesize'],
            "total" => $ret['total']
        );
//        pr($ret);
        echo Response::HTML((array('result' => $ret['list'], 'page' => $page)));

    }


}

?>