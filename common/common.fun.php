<?php
/**
 * Copyright © 艾瑞咨询集团(http://www.iresearch.com.cn/)
 * 相关函数
 * Author Zhangwenjun <zhangwenjun@iresearch.com.cn>
 * Create 13-11-15 09:45
 */
//调试信息
function debug_info($info = array()){
	global $i;
	$i++;
	foreach($info as $v){
		$v['trace'] = array_reverse($v['trace']);
		echo '第 ', $i, ' 次数据操作','<br>';
		echo 'MYSQL连接时间：',$v['connect_time'],'<br>';
		echo '执行SQL：',$v['sql'],'<br>';
		echo 'SQL执行时间：',$v['execute_time'],'<br>';
		echo 'SQL错误：',$v['error'],'<br>';
		echo '代码跟踪：访问了','<br>';
		echo '控制器:',$v['trace'][1]['file'],',第 ',$v['trace'][1]['line'],' 行, ',$v['trace'][1]['func'],'()',' 方法','<br>';
		echo '模型层:',$v['trace'][2]['file'],'第 ',$v['trace'][2]['line'],' 行, ',$v['trace'][2]['func'],'()',' 方法','<br>';
		echo '代理层:',$v['trace'][3]['file'],'第 ',$v['trace'][3]['line'],' 行, ',$v['trace'][3]['func'],'()',' 方法','<br><br>';
		
	}

}

function l($txt = '{}'){
    $new_log = ROOT_PATH  . 'log/' . date('Ymd') . '/log_new/' . date('G') . '/';
    if(!is_dir($new_log)){
        mkdirs($new_log);
    }
    $content = '['.date('Y-m-d H:i:s') .']:' .' ip='.getIp() . ',' . ' come_from=http://'.$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . ',' .' content=' .$txt ."\r\n";
    fun_write_file($new_log . 'log.txt', $content);
}



function gUid(){
    $guid = isset($_GET['guid']) ? $_GET['guid'] : '';
    if(!empty($guid)){
        Session::instance()->set('guid', $guid);
    }
}
//当前周、月、年 转换时间
function playTime($w = 'week'){
    if($w == 'week'){
        $date = date('Y-m-d', strtotime("+7 day"));
    }elseif($w == 'month'){
        $date = date('Y-m-d', strtotime("+1 month"));
    }elseif($w == 'year'){//半年
        $date = date('Y-m-d', strtotime("+6 month"));
    }
    return $date;
}
function removeM($ret){
    foreach($ret['content'][0] as $k=>$v){
        $kk=array_keys($v);
        $ret['content'][2][1]=$kk[6];
        $ret['content'][2][2]=$kk[7];
        $ret['content'][2][3]=$kk[8];
        $ret['content'][2][4]=$kk[9];
        $ret['content'][2][5]=$kk[10];
        $ret['content'][2][6]=$kk[11];
        $ret['content'][2][7]=$kk[12];
        $ret['content'][0][$k]['monday']=$v[$kk[6]];
        if($v[$kk[5]]>$v[$kk[6]]){
            $ret['content'][0][$k]['mondays']='caret-down red';
        }
        if($v[$kk[5]]<$v[$kk[6]]){
            $ret['content'][0][$k]['mondays']='caret-up green';
        }
        if($v[$kk[5]]==$v[$kk[6]]){
            $ret['content'][0][$k]['mondays']='minus gray';
        }
        //////////////////////////////////////
        $ret['content'][0][$k]['tuesday']=$v[$kk[7]];
        if($v[$kk[6]]>$v[$kk[7]]){
            $ret['content'][0][$k]['tuesdays']='caret-down red';
        }
        if($v[$kk[6]]<$v[$kk[7]]){
            $ret['content'][0][$k]['tuesdays']='caret-up green';
        }
        if($v[$kk[6]]==$v[$kk[7]]){
            $ret['content'][0][$k]['tuesdays']='minus gray';
        }
        //////////////////////////////////////
        $ret['content'][0][$k]['wednesday']=$v[$kk[8]];
        if($v[$kk[7]]>$v[$kk[8]]){
            $ret['content'][0][$k]['wednesdays']='caret-down red';
        }
        if($v[$kk[7]]<$v[$kk[8]]){
            $ret['content'][0][$k]['wednesdays']='caret-up green';
        }
        if($v[$kk[7]]==$v[$kk[8]]){
            $ret['content'][0][$k]['wednesdays']='minus gray';
        }
        //////////////////////////////////////
        $ret['content'][0][$k]['thursday']=$v[$kk[9]];
        if($v[$kk[8]]>$v[$kk[9]]){
            $ret['content'][0][$k]['thursdays']='caret-down red';
        }
        if($v[$kk[8]]<$v[$kk[9]]){
            $ret['content'][0][$k]['thursdays']='caret-up green';
        }
        if($v[$kk[8]]==$v[$kk[9]]){
            $ret['content'][0][$k]['thursdays']='minus gray';
        }
        //////////////////////////////////////
        $ret['content'][0][$k]['friday']=$v[$kk[10]];
        if($v[$kk[9]]>$v[$kk[10]]){
            $ret['content'][0][$k]['fridays']='caret-down red';
        }
        if($v[$kk[9]]<$v[$kk[10]]){
            $ret['content'][0][$k]['fridays']='caret-up green';
        }
        if($v[$kk[9]]==$v[$kk[10]]){
            $ret['content'][0][$k]['fridays']='minus gray';
        }
        //////////////////////////////////////
        $ret['content'][0][$k]['saturday']=$v[$kk[11]];
        if($v[$kk[10]]>$v[$kk[11]]){
            $ret['content'][0][$k]['saturdays']='caret-down red';
        }
        if($v[$kk[10]]<$v[$kk[11]]){
            $ret['content'][0][$k]['saturdays']='caret-up green';
        }
        if($v[$kk[10]]==$v[$kk[11]]){
            $ret['content'][0][$k]['saturdays']='minus gray';
        }
        //////////////////////////////////////
        $ret['content'][0][$k]['sunday']=$v[$kk[12]];
        if($v[$kk[11]]>$v[$kk[12]]){
            $ret['content'][0][$k]['sundays']='caret-down red';
        }
        if($v[$kk[11]]<$v[$kk[12]]){
            $ret['content'][0][$k]['sundays']='caret-up green';
        }
        if($v[$kk[11]]==$v[$kk[12]]){
            $ret['content'][0][$k]['sundays']='minus gray';
        }
    }
    return $ret;
}
function remove($ret,$top){
    foreach ($ret['list']['content'][0]  as $k=>$v) {
        if ($k%10==0){
            $list[$k]['listname']=$v['listname'];
            $list[$k]['listname']=str_replace("_"," ",$list[$k]['listname']);
        }
//                pr($k);

    }
	for($i=0;$i<count($ret['list']['content'][0]);$i++){
		$ret['list']['content'][0][$i]['listname']=str_replace("_"," ",$ret['list']['content'][0][$i]['listname']);
	}
    foreach($list as  $k=>$v){
        foreach ($ret['list']['content'][0]  as $gk=>$gv) {
            if($gv['listname']==$v['listname']){
                $list[$k]['list'][$gk]=$gv;
            }
        }
    }
    foreach($list as  $k=>$v){
//        $i=0;
        $list[$k]['list']=array();
        for($j=0;$j<10;$j++){
            foreach($v['list'] as $lv){
//            if()
                if($lv['ranking']==$j+$top+1){
                    $list[$k]['list'][$j]=$lv;
                }

//                $list[$k]['list'][$i]['newname']=cnSubStr($list[$k]['list'][$i]['gamename'],7).'...';
//                $i++;

            }
            if( $list[$k]['list'][$j]['ranking']==''){
                $list[$k]['list'][$j]['ranking']=$j+1;
                $list[$k]['list'][$j]['gamename']='暂无数据';
            }
        }

    }
    return $list;
};

//截取中文字符
function cnSubStr($string,$sublen,$tip='')
{
    $len = strlen($string);
    if($sublen>=$len)
    {
        return $string;
    }
    $s= mb_substr($string, 0, $sublen, 'utf-8');
    if(strlen($s) >= $len)
        return $s;
    return $s.$tip;
}

//周转换成日期
function weekDate($date){
    $year = substr($date,0,4);
    $week = substr($date,4);
    $day = 0;
    $last_year =  strtotime(($year-1).'-12-31');
    $last_date_in_week = date('N',$last_year);
    $days = $week * 7 + 1+ $day - $last_date_in_week;
    $the_day  = strtotime("+$days days",$last_year);
    return date('Y-m-d',$the_day);
}

//debug
function pr($data, $type=0){
    echo "<pre>";
    $type == 0 ? print_r($data) : print_r(json_decode($data, true));
}

 //获取HOST
function getHttpHost(){
    return "http://".(isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : (isset($_SERVER['']) ? $_SERVER['HTTP_HOST'] : ''));
}
 //跳转
function redirect($uri = '/', $method = 'location', $http_response_code = 302){
    switch($method)
    {
        case 'refresh'	: header("Refresh:0;url=".$uri);
            break;
        default			: header("Location: ".$uri, TRUE, $http_response_code);
            break;
    }
    exit;
}
//容量转换
function tosize($bytes) {       	 	     //自定义一个文件大小单位转换函数
    if ($bytes >= pow(2,40)) {      		     //如果提供的字节数大于等于2的40次方，则条件成立
        $return = round($bytes / pow(1024,4), 2);    //将字节大小转换为同等的T大小
        $suffix = "TB";                        	     //单位为TB
    } elseif ($bytes >= pow(2,30)) {  		     //如果提供的字节数大于等于2的30次方，则条件成立
        $return = round($bytes / pow(1024,3), 2);    //将字节大小转换为同等的G大小
        $suffix = "GB";                              //单位为GB
    } elseif ($bytes >= pow(2,20)) {  		     //如果提供的字节数大于等于2的20次方，则条件成立
        $return = round($bytes / pow(1024,2), 2);    //将字节大小转换为同等的M大小
        $suffix = "MB";                              //单位为MB
    } elseif ($bytes >= pow(2,10)) {  		     //如果提供的字节数大于等于2的10次方，则条件成立
        $return = round($bytes / pow(1024,1), 2);    //将字节大小转换为同等的K大小
        $suffix = "KB";                              //单位为KB
    } else {                     			     //否则提供的字节数小于2的10次方，则条件成立
        $return = $bytes;                            //字节大小单位不变
        $suffix = "Byte";                            //单位为Byte
    }
    return $return ." " . $suffix;                       //返回合适的文件大小和单位
}
 //判断是否irsearch域名
 function is_ire_domain($url){
    $tmp         = parse_url($url);
    $tmp_host    = array_reverse(explode('.', $tmp['host']));
    $host_domain = $tmp_host[1] . '.' . $tmp_host[0];
    if ($host_domain == 'iresearch.com')
        return true;
    else
        return false;
}

function gbk2utf8($data)
{
    if (is_array($data)) {
        return array_map('gbk2utf8', $data);
    } else if (is_object($data)) {
        return array_map('gbk2utf8', get_object_vars($data));
    }
    return mb_convert_encoding($data, 'UTF-8', 'GBK');
}

function utf8togbk($data)
{
    if (is_array($data)) {
        return array_map('utf8togbk', $data);
    } else if (is_object($data)) {
        return array_map('utf8togbk', get_object_vars($data));
    }
    return mb_convert_encoding($data, 'GBK', 'UTF-8');
}

function isCli() {
    return PHP_SAPI == 'cli' && empty($_SERVER['REMOTE_ADDR']);
}
//测试打印
function p($info, $exit = true, $ret = false) {
    if (defined('DEBUG')) {// && DEBUG == true
        $debug  = debug_backtrace();
        $output = '';

        if (isCli()) {
            $output .= '[TRACE]' . PHP_EOL;
            foreach ($debug as $v) {
                $output .= 'File:' . $v['file'];
                $output .= 'Line:' . $v['line'];
                $output .= 'Args:' . implode(',', $v['args']) . PHP_EOL;
            }
            $output .= '[Info]' . PHP_EOL;
            $output .= var_export($info, true) . PHP_EOL;
        } else {
            foreach ($debug as $v) {
                $output .= '<b>File</b>:' . $v['file'] . '&nbsp;';
                $output .= '<b>Line</b>:' . $v['line'] . '&nbsp;';
                $output .= $v['class'] . $v['type'] . $v['function'] . '(\'';
                //$output .= implode('\',\' ', $v['args']);
                $output .= '\')<br/>';
            }
            $output .= '<b>Info</b>:<br/>';
            $output .= '<pre>';
            $output .= var_export($info, true);
            $output .= '</pre>';
        }

        if ($ret)
            return $output;
        else
            echo $output;
        if ($exit)
            exit;
    } else {
        return;
    }
}

//去除空格
function trim_space($s) {
	$s = mb_ereg_replace('^(　| )+', '', $s);
	$s = mb_ereg_replace('(　| )+$', '', $s);
	return $s;
}
//判断是否url
function isUrl($url) {
    return preg_match('/^(http|https):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+)/i', $url);
}
 //得到来路ip函数
 function getIp($type='') {

	 if (isset($_SERVER)) {
		 if (isset($_SERVER[HTTP_X_FORWARDED_FOR])) {
			 $realip = $_SERVER[HTTP_X_FORWARDED_FOR];
		 } elseif (isset($_SERVER[HTTP_CLIENT_IP])) {
			 $realip = $_SERVER[HTTP_CLIENT_IP];
		 } else {
			 $realip = $_SERVER[REMOTE_ADDR];
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

//随机数
function prorand($length){
 $key = '';
 $pattern='1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLOMNOPQRSTUVWXYZ'; //字符池
 for($i=0;$i<$length;$i++){
  $key.=$pattern{mt_rand(0, 9)};//生成php随机数
 }
 return $key;
}

//创建多级目录
function mkdirs($dir, $mode = 0777){
  if (is_dir($dir) || @mkdir($dir,$mode)) return true;
  if (!mkdirs(dirname($dir),$mode)) return false;
  return @mkdir($dir,$mode);
}
function zipfile($file="",$type="php"){
	$tmpfile=$data="";
	$type=strtolower($type);
	if(is_file($file)&&file_exists($file)){
		if($type=="php"){
			$zipfile='php_strip_whitespace';
		}else{
			$zipfile='file_get_contents';
		}
		$data=$zipfile($file);
		$tmpfile=dirname($file)."\~tmp_".basename($file);
	}else{
		$data=str_replace("\t","",$file);
	}
	$data=trim($data);
	if($type!='php'&&$data){
		$cleanstring=array("/[\r\n]\/\/[^\r\n]*[\r\n]/","/\/\/[^\r\n\"']*[\r\n]/","/\/\*.*?\*\//s","/\/\*.*\*\//Us","/\s(?=\s)/");
		$data=preg_replace($cleanstring,"",$data);
	}else{
		$cleanstring=array("/[\n\r\t]/");
		$data=preg_replace($cleanstring,"",$data);
	}
	//if($tmpfile)@file_put_contents($tmpfile,$data);
	return $data;
}

//替换字符并清除2端的逗号和空格
function fun_trim_string($string=""){
	$string=fun_str_html($string);
	$string=trim($string,",");
	$string=trim($string);
	return $string;
}

//HTML运行模式换成HTML识别模式
function fun_str_html($str){
	//$str=trim($str);
	$str=fun_str_rehtml($str);
	$str=htmlspecialchars($str);
	$str=str_replace('&amp;','&',$str);
	$str=str_replace("'",'&apos;',$str);//&#039;
	$str=str_replace('&','&amp;',$str);
	$str=str_replace('%','％',$str);
	return $str;
}

//HTML识别模式切换成HTML运行模式
function fun_str_rehtml($str){
	$str=str_replace('&amp;','&',$str);
	$str=str_replace('&apos;',"'",$str);//&#039;
	$str=stripslashes($str);
	$str=str_replace('％','%',$str);
	return $str;
}

//脚本输出
function script($s){
    echo("
    <SCRIPT LANGUAGE=\"JavaScript\">
    $s
    </SCRIPT>
    ");
	exit;
}

//计算中文字符长度：len('你hao')=4
function len($l1){
	$I2 = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/";
	preg_match_all($I2,$l1,$I3);
	return count($I3[0]);
}

function get_visite_folder(){
	$visit_path=$_SERVER["SCRIPT_NAME"];
	$arr=explode('/',$visit_path);
	return strtolower($arr[count($arr)-2]);
}

//JS解码的Php实现方式
function js_unescape($str){
         $ret = '';
         $len = strlen($str);

         for ($i = 0; $i < $len; $i++)
         {
                 if ($str[$i] == '%' && $str[$i+1] == 'u')
                 {
                         $val = hexdec(substr($str, $i+2, 4));

                         if ($val < 0x7f) $ret .= chr($val);
                         else if($val < 0x800) $ret .= chr(0xc0|($val>>6)).chr(0x80|($val&0x3f));
                         else $ret .= chr(0xe0|($val>>12)).chr(0x80|(($val>>6)&0x3f)).chr(0x80|($val&0x3f));

                         $i += 5;
                 }
                 else if ($str[$i] == '%')
                 {
                         $ret .= urldecode(substr($str, $i, 3));
                         $i += 2;
                 }
                 else $ret .= $str[$i];
         }
         return $ret;
}

function fun_get_keyword($str,$k=array(),$color='red'){
	//关键字加亮
	for($i=0;$i<count($k);$i++){
		$str=ereg_replace("/".quotemeta($k[$i])."/",'<span style="color:'.$color.'">'.$k[$i].'</span>',$str);
	}
	return $str;
}

//写文件
function fun_write_file($path,$content, $auth = 'a'){
	if(@$fp = fopen($path, $auth)){
			@fwrite($fp,$content);
			@fclose($fp);
			@chmod($path, 0777);
			return true;
		}else{
			return false;
		}
}

//删除文件
function fun_del_files($files){
	if(fun_chk_files($files)){
		@unlink($files);
	}
}

//检查文件是否存在
function fun_chk_files($files){
	if(file_exists($files)){
		return true;
	}else{
		return false;
	}
}

//创建文件夹
function fun_set_mkdir($file){
	//if(!@is_dir($file)&&!@mkdir($file))@mkdir($file,0777);
	if (@is_dir($file) || @mkdir($file, 0777)){return true;};
	if (fun_set_mkdir(dirname($file), 0777)){return @mkdir($file, 0777);};
}

//模板初始化
function template_ini($tpl,$title='',$meta_key='',$meta_des='') {

	if($title==''){
		$title= WEBSITE_TITLE;
	}else{
		$title.=' - '.WEBSITE_TITLE;
	}
//
//    require_once(ROOT_PATH . CONTROLLER .DS .CONTROLLER . '.menu.php');
//    $menu = new MenuController();
//    $menu = $menu->index();
    $_session = Session::instance();
    //所有模板均调用以下接口去获取该用户是否管理员??并该接口直接读取sqlserver,造成页面并发速度慢.
//    $admin = Model::instance('apply')->adminApply(array('apply_adminid'=>$_session->get( 'uid' )));
//    echo Session::instance()->get('admin_auth');
	$tpl->assign(array('AUTH'=>Session::instance()->get('admin_auth'), 'USER_NAME'=>$_session->get( 'user_name' ),'PAGE_TITLE'=>$title,'META_KEY'=>$meta_key,'META_DES'=>$meta_des,'WEBSITE_URL'=>WEBSITE_URL,'WEBSITE_SOURCE_URL'=>WEBSITE_SOURCE_URL,'EXPORT_PIC'=>EXPORT_PIC));
}
function i_array_column($input, $columnKey, $indexKey=null){
    if(!function_exists('array_column')){
        $columnKeyIsNumber  = (is_numeric($columnKey))?true:false;
        $indexKeyIsNull            = (is_null($indexKey))?true :false;
        $indexKeyIsNumber     = (is_numeric($indexKey))?true:false;
        $result                         = array();
        foreach((array)$input as $key=>$row){
//            if($columnKeyIsNumber){
//                echo "111--";
//                $tmp= array_slice($row, $columnKey, 1);
//                $tmp= (is_array($tmp) && !empty($tmp))?current($tmp):null;
//            }else{
//                echo "222--";
                $tmp= isset($row[$columnKey])?$row[$columnKey]:null;
//            }

//            if(!$indexKeyIsNull){
//                if($indexKeyIsNumber){
//                    $key = array_slice($row, $indexKey, 1);
//                    $key = (is_array($key) && !empty($key))?current($key):null;
//                    $key = is_null($key)?0:$key;
//                }else{
//                    $key = isset($row[$indexKey])?$row[$indexKey]:0;
//                }
//            }
            $result[$key] = $tmp;
        }
        return $result;
    }else{
        return array_column($input, $columnKey, $indexKey);
    }
}
//二维数组
function array_to_number($array){
    $countarray1=count($array);
    $countarray2=count($array[0]);
    for($i=0;$i<$countarray1;$i++){
        for($j=1;$j<$countarray2;$j++){
            if(is_numeric($array[$i][$j])){
                $array[$i][$j]=$array[$i][$j]+0;
            }
        }
    }
    return $array;
}
//一纬数组
function array_to_number_one($array){
    $countarray1=count($array);
    for($i=0;$i<$countarray1;$i++){
        if(is_numeric($array[$i][$j])){
             $array[$i]=$array[$i]+0;
        }
    }
    return $array;
}
//转换并将数据设置为0
function array_to_number_one_null($array){
    $countarray1=count($array);
    for($i=0;$i<$countarray1;$i++){
        if(is_numeric($array[$i][$j])){
        	if($array[$i]==0){
        		$array[$i]=null;
        	}
        	else{
        		$array[$i]=$array[$i]+0;	
        	}
        }
    }
    return $array;
}
function upload_files($file,$editor=0){
    $name = $file['name'];
    $type = $file['type'];
    $size = $file['size'];
    $tmp_name = $file['tmp_name'];
    $url = dirname(dirname(__FILE__))."\\public\\upload\\";//文件路径
    $tmp_url = $url.$name;
    $tpname = substr(strrchr($name,'.'),1);//获取文件后缀
    $types = array('jpg','png','jpeg','bmp','gif');
    $filesize = 1024 * 1024 * 100;
    if($size > $filesize){
        //              echo "<script>alert('退出成功!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
        echo "<script>alert('文件过大!');history.go(-1)</script>";exit;
    }else if(!in_array($tpname,$types)){
        echo "<script>alert('文件类型不符合!');history.go(-1)</script>";exit;
    }else if(!move_uploaded_file($tmp_name,$tmp_url)){
        echo "<script>alert('移动文件失败!');history.go(-1)</script>";exit;
    }else{
        if($editor==1){
            echo "<script>window.parent.InsertHTML('<div><img src=\"public/upload/".$name."\" border=\"0\" width=\"400\" height=\"300\"></div>');</script>";
        }
        move_uploaded_file($tmp_name,$tmp_url);
        $size = round($size/1024/1024,2); //转换成Mb
        $upload = array('size' => $size, 'url' => $tmp_url, 'name' => $name, 'type' => $tpname);
        return $upload;
    }
}

//接口成功返回
function to_success($data){
    return json_encode(array(
            resCode => 200,
            resMsg =>'ok',
            resData => $data
        ));
}
//接口失败返回
function to_error($data){
    return json_encode(array(
            resCode => 400,
            resMsg =>'error',
            resData => $data
        ));
}

//参数1：访问的URL，参数2：post数据(不填则为GET)，参数3：提交的$cookies,参数4：是否返回$cookies
function curl_request($url,$post='',$cookie='', $returnCookie=0){
    // echo iconv("GB2312","UTF-8",'中文');
    // echo '红啊';
    // var_dump($post);
    $str = $post ? '参数：'.json_encode($post):'';
    l('--->url:'.$url.'---'.json_encode($post));
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)');
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_AUTOREFERER, 1);
        // curl_setopt($curl, CURLOPT_REFERER, "http://XXX");
        if($post) {
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post));
        }
        if($cookie) {
            curl_setopt($curl, CURLOPT_COOKIE, $cookie);
        }
        curl_setopt($curl, CURLOPT_HEADER, $returnCookie);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($curl);
        if (curl_errno($curl)) {
            return curl_error($curl);
        }
        curl_close($curl);
        if($returnCookie){
            list($header, $body) = explode("\r\n\r\n", $data, 2);
            preg_match_all("/Set\-Cookie:([^;]*);/", $header, $matches);
            $info['cookie']  = substr($matches[1][0], 1);
            $info['content'] = $body;
            return $info;
        }else{
            if(isset($_GET['debug'])){
                echo iconv("GB2312","UTF-8",'中文');
                echo '请求的url：'.$url;
                if($post){
                    echo mb_convert_encoding('<br>参数：'.json_encode($post),'UTF-8', 'UTF-8,GBK,GB2312,BIG5');
                }
                echo '<br>返回值：'.json_encode($post);
                
            }
            return $data;
        }
}
//获取get或者post传过来的参数 转换成数组
function getData(){
    $pData = json_decode(file_get_contents("php://input"),true);
    // $pData = $_REQUEST;
    return $pData? $pData : $_REQUEST;
}
?>