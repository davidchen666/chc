<?php
/**
 * Copyright © 艾瑞咨询集团(http://www.iresearch.com.cn/)
 * SDK中间api类
 * Author Zhangwenjun <zhangwenjun@iresearch.com.cn>
 * Create 14-03-05 14:34
 */
require_once("api.url.php");
class Api extends Url{
    private $_sessionid = null;
    private $_csrftoken = null;
    public function __construct(){
        parent::__construct();
    }

    private function _applyAPI($arr, $argsList, $baseUrl, $method){
        require_once("api.log.php");
        foreach($argsList as $key => $val){
            if(!is_array($arr) || !isset($arr[$val]) || $arr[$val] === ""){
                exit("api调用参数错误,未传入参数$val");
            }
        }
        $arr['v'] = VERSION;
        $start_time = microtime(true);
        if($method == "POST"){
            $response = $this->_curlPost($baseUrl, $arr);
        }else if($method == "GET"){
            $response = $this->_curlGet($baseUrl, $arr);
        }

        $time = microtime(true) - $start_time;
        $log = new Log();
        $log->log($baseUrl, $method, json_encode($arr), $response, $time);
        return $response;
    }

    public function __call($name, $arg){
        if(empty($this->_apiMap[$name])){

            exit("Api调用名称错误,不存在的API: <span style='color:#ff0000;'>$name</span>");
        }
        $baseUrl = $this->_apiMap[$name][0];
        $argsList = $this->_apiMap[$name][1];
        $method = isset($this->_apiMap[$name][2]) ? $this->_apiMap[$name][2] : "GET";

        if(empty($arg)){
            $arg[0] = null;
        }
        $response = json_decode($this->_applyAPI($arg[0], $argsList, $baseUrl, $method), true);
//        if($response['ret'] == 0){
        return $response;
//        }else{
//            exit("返回出错: <span style='color:red;'>$name({$response['msg']})</span>");
//        }
    }
    private function convertUrlQuery($query){
        $queryParts = explode('&', $query);
        $params = array();
        foreach ($queryParts as $param){
            $item = strpos($param, '=');
            $item0 = substr($param, 0, $item);
            $item1 = substr($param, $item+1);
            $params[$item0] = $item1;
        }
        return $params;
    }
    private function createSign($url, $type = 'get'){
        $p_url = parse_url($url);
        $p_query = $this->convertUrlQuery(urldecode($p_url['query']));
        $param_str = implode('', $p_query);
        $csign = md5(KEY . $param_str . KEY);
        $url .= '&sign='.$csign;
        if($type == 'post'){
            return '&sign='.$csign;
        }
        return $url;
    }

    public function _curlGet($url,$params = array(),$timeout = 300){

//        $csrftoken = isset($_SESSION['csrftoken']) ? $_SESSION['csrftoken'] : '';
//        $sessionid = isset($_SESSION['sessionid']) ? $_SESSION['sessionid'] : '';
        $ch = curl_init();
        if(!empty($params)){
            $params = $params ? http_build_query($params) : '';
            if(strpos($url, '?') > 0){
                $url =  $url .'&'. $params;
            }else{
                $url =  $url .'?'. $params;
            }

        }
        $url = $this->createSign($url);
        if(DEBUG){
            echo $url,'<br>';
        }
        if(substr($url,0,5) == 'https'){
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
        curl_setopt($ch, CURLOPT_COOKIEJAR, '/');
//        curl_setopt($ch, CURLOPT_COOKIE, 'csrftoken=' .$csrftoken .';sessionid='.$sessionid);
        curl_setopt($ch, CURLOPT_DNS_CACHE_TIMEOUT, 86400);
        $content = curl_exec($ch);
        curl_close($ch);
        if(DEBUG){
            pr($content, 1);
            echo '<br>';
        }
        return $content;
    }
    private function  _postUrl($url,$data=''){
        $row = parse_url($url);
        $host = $row['host'];
        $port = $row['port'] ? $row['port']:80;
        $file = $row['path'];
        $post = '';
        while (list($k,$v) = each($data))
        {
            $post .= urlencode($k)."=".urlencode($v)."&";
        }
        $post = substr( $post , 0 , -1 );
        $len = strlen($post);
        $fp = @fsockopen( $host ,$port, $errno, $errstr, 10);
        if (!$fp) {
            return "$errstr ($errno)\n";
        } else {
            $receive = '';
            $out = "POST $file HTTP/1.0\r\n";
            $out .= "Host: $host\r\n";
            $out .= "Content-type: application/x-www-form-urlencoded\r\n";
            $out .= "Set-Cookie: csrftoken={$data['csrfmiddlewaretoken']}\r\n";
            $out .= "Connection: Close\r\n";
            $out .= "Content-Length: $len\r\n\r\n";
            $out .= $post;
            fwrite($fp, $out);
            while (!feof($fp)) {
                $receive .= fgets($fp, 128);
            }
            fclose($fp);
            $receive = explode("\r\n\r\n",$receive);
            unset($receive[0]);
            return implode("",$receive);
        }
    }

    public function _curlPost($url, $data = array(), $cookiepath = '/',$timeout=300){

//        $csrftoken = isset($_SESSION['csrftoken']) ? $_SESSION['csrftoken'] : '';
//        $sessionid = isset($_SESSION['sessionid']) ? $_SESSION['sessionid'] : '';
        $userAgent = 'Mozilla/4.0+(compatible;+MSIE+6.0;+Windows+NT+5.1;+SV1)';
        $referer = $url;
        if(!is_array($data) || !$url) return '';
        $post = '';
        $nurl = $url;
        $post = $data ? http_build_query($data) : '';
        if(strpos($url, '?') > 0){
            $nurl =  $url .'&'. $post;
        }else{
            $nurl =  $url .'?'. $post;
        }
        $sign = $this->createSign($nurl, 'post');
        $post .= $sign;
        if(DEBUG){
            echo $url,'<br>';
            print_r($post);
            echo '<br>';
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);				// 设置访问的url地址
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);        // 设置超时
        curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);	// 用户访问代理 User-Agent
        curl_setopt($ch, CURLOPT_REFERER, $referer);		// 设置 referer
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);		// 跟踪301
        curl_setopt($ch, CURLOPT_POST, 1);					// 指定post数据
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);		// 添加变量
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookiepath);	// COOKIE的存储路径,返回时保存COOKIE的路径
//        curl_setopt($ch, CURLOPT_COOKIE, 'csrftoken=' .$csrftoken .';sessionid='.$sessionid);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);		// 返回结果
        $content = curl_exec($ch);
        curl_close($ch);
        if(DEBUG){
            pr($content, 1);
            echo '<br>';
        }
        return $content;
    }


}
?>
