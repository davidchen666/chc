<?php
/**
 * Copyright © 艾瑞咨询集团(http://www.iresearch.com.cn/)
 * 处理输出
 * response 类
 * Author Zhangwenjun <zhangwenjun@iresearch.com.cn>
 * Create 13-11-18 13:03
 */
class Response
{
    // CONTENT TYPE
    const JSON = 'application/json';
    const HTML = 'text/html';
    const JAVASCRIPT = 'text/javascript';
    const JS   = 'text/javascript';
    const TEXT = 'text/plain';
    const XML  = 'text/xml';

    static public $response_type = null;

    static public function JSON($data = array(), $content_type = Response::JSON,$html_encoded=true,$callback ='jsonp_callback')
    {
        self::$response_type = Response::JSON;

        if (is_object($data))
            $data = get_object_vars($data);
        else if (! is_array($data))
            $data = array();

        if(isset($_REQUEST[$callback])){
            //防止xss注入
            $callback_return = str_replace(array('<','>'), '', $_REQUEST[$callback]);
            return $callback_return . '(' . htmlspecialchars(json_encode(($data)), ENT_NOQUOTES) . ')';
        }else{
            if($content_type!==null){
                header("Content-type: " . $content_type);
            }
            return  $html_encoded ? htmlspecialchars(json_encode(($data)), ENT_NOQUOTES) : json_encode(($data));
        }
    }

    static public function HTML($data = array(), $content_type = Response::JSON,$callback ='jsonp_callback')
    {
        self::$response_type = Response::HTML;

        if (is_object($data))
            $data = get_object_vars($data);
        else if (! is_array($data))
            $data = array();

        if(isset($_REQUEST[$callback])){

            //防止xss注入
            $callback_return = str_replace(array('<','>'), '', $_REQUEST[$callback]);
//            print_r($data);
//            print_r(json_encode(($data)));exit();
            return $callback_return . '(' . json_encode(($data)) . ')';
        }else{
            header("Content-type: " . $content_type);

            return json_encode(($data));
        }
    }
}