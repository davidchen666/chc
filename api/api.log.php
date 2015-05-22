<?php
/**
 * Copyright © 艾瑞咨询集团(http://www.iresearch.com.cn/)
 * 日志类--记录api调用日志
 * Author Zhangwenjun <zhangwenjun@iresearch.com.cn>
 * Create 14-03-05 09:45
 */
header("Content-type: text/html; charset=utf-8");
class Log{
    private $dir_log = './log/';
    function __construct(){

    }
    private function getIp($type='') {

        if (isset($_SERVER)) {
            if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
                $realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
            } elseif (isset($_SERVER["HTTP_CLIENT_IP"])) {
                $realip = $_SERVER["HTTP_CLIENT_IP"];
            } else {
                $realip = $_SERVER["REMOTE_ADDR"];
            }
        } else {
            if (getenv("HTTP_X_FORWARDED_FOR")) {
                $realip = getenv( "HTTP_X_FORWARDED_FOR");
            } elseif (getenv("HTTP_CLIENT_IP")) {
                $realip = getenv("HTTP_CLIENT_IP");
            } else {
                $realip = getenv("REMOTE_ADDR");
            }
        }
        if($type == 'int')
            return (float)bindec(decbin(ip2long($realip)));
        return $realip;
    }

    private function mkdirs($dir, $mode = 0777){
        if (is_dir($dir) || @mkdir($dir,$mode)) return true;
        if (!$this->mkdirs(dirname($dir),$mode)) return false;
        return @mkdir($dir,$mode);
    }
    private function write_file($path,$content){
        if(@$fp = fopen($path, 'a')){
            @fwrite($fp,$content);
            @fclose($fp);
            @chmod($path, 0777);
            return true;
        }else{
            return false;
        }
    }

    function log($api = '', $method='', $params='{}', $txt, $time=0){
        $new_log = $this->dir_log . date('Ymd') . '/' . date('G') . '/';
        if(!is_dir($new_log)){
            $this->mkdirs($new_log);
        }
        $content = '['.date('Y-m-d H:i:s') .']:' .' ip='.$this->getIp() . ',' . ' come_from=http://'.$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . ',' . ' api_url='.$api . ',' . ' method='.$method . ',' . ' params='.$params . ',' . ' cost_time='.$time . ',' .' content=' .$txt ."\r\n";
        $ret = $this->write_file($new_log . 'log.txt', $content);
    }
}
?>