<?php
/**
 * Copyright © 艾瑞咨询集团(http://www.iresearch.com.cn/)
 * 基础路由
 * Author Zhangwenjun <zhangwenjun@iresearch.com.cn>
 * Create 13-11-14 17:45
 */
interface IMysqlRoutRule
{

    function getRout();

}
class MysqlRoutRule implements IMysqlRoutRule{

    private $routArr = array();
    private static $select = 'S';
    static $instances = null;
    final static public function Rout($r = 'S'){

		$r = strtoupper($r);

		$r && self::$select = in_array($r,array('M','S', '238')) ? $r : self::$select;

        if(self::$instances == null){

            self::$instances = new self();
        }
        return self::$instances->getRout();
    }

    final function getRout(){
        $this->routArr = array(
//            'M'=>array(
//                '0'=>array(
//                    'host'=>'180.169.19.187',
//                    'user'=>'idexadmin',
//                    'pass'=>'idex000',
//                    'db'=>'ivtadmin'
//                )
//            ),
//            'S'=>array(
//                '0'=>array(
//                    'host'=>'180.169.19.187',
//                    'user'=>'idexadmin',
//                    'pass'=>'idex000',
//                    'db'=>'ivtadmin'
//                )
//            )
        'M'=>array(
                '0'=>array(
                    'host'=>'10.10.21.163',
                    'user'=>'root',
                    'pass'=>'weiwei',
                    'db'=>'ivtadmin'

                )
            ),
            'S'=>array(
                '0'=>array(
                    'host'=>'127.0.0.1',
                    'user'=>'root',
                    'pass'=>'',
                )
            )
        );
       
	   $opr = self::$select;

       is_array($this->routArr[$opr]) && $res = $this->routArr[$opr][array_rand($this->routArr[$opr])];

       return $res;
    }

}
//var_dump(MysqlRoutRule::Rout('mdd'));

?>