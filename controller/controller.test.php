<?php

/**
 * Created by PhpStorm.
 * User: hyanwang
 * Date: 2015/10/8
 * Time: 11:25
 */
class TestController extends Controller
{
    function __construct()
    {

    }

    public function index()
    {
        $data = array();
        View::instance('test/index.tpl')->show($data);
    }
}
