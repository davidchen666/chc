<?php
/**
 * Copyright © 艾瑞咨询集团(http://www.iresearch.com.cn/)
 * MODEL代理类
 * Author Zhangwenjun <zhangwenjun@iresearch.com.cn>
 * Create 13-11-15 09:45
 */

class AgentModel extends Model {
	
	private $mydb;
	private $flag_spl_rw = false;//是否启动读写分离过滤
	private $opr = 'M';

//	function __construct(){}
	
	/**
	 * mysqlQuery
	 * 
	 * @Describe : mysql查询结果
	 * @Parm : $sql语句
	 * @Parm : $arr array('表字段'=>写入值)
	 * @Parm : $type ''=>返回游标集;'row'=>返回一行;'all'=>返回多条数组;'assoc'=>返回带下标单行结果集;
	 * @Parm : $db 空表示默认数据库
	 * @Return : array
	 * @Author : zhangwenjun 
	 * @DataTime : 2013-11-15 16:15
	 */
	protected function mysqlQuery($sql = '',$type = '',$db = ''){

		if(!preg_match ("/^(\s*)select/i", $sql)){
			return "SQL ERROR!";
		}

		$this->flag_spl_rw == true && $this->opr = "R";
		
		$res = $this->mydb($db, $this->opr)->query($sql,$type);

		$this->data_unset();

		return $res;
	}
	
	/**
	 * mysqlInsert
	 * 
	 * @Describe : mysql写入数据
	 * @Parm : $tab 表名
	 * @Parm : $arr array('表字段'=>写入值)
	 * @Parm : $type 'single' 单条写入 'mult' 多条写入($arr 必须二维数组)
	 * @Parm : $lastid true/false 是否返回写入记录id
	 * @Parm : $db 空表示默认数据库
	 * @Parm : $showsql true/false 返回sql语句
	 * @Return : true/false/lastid
	 * @Author : zhangwenjun 
	 * @DataTime : 2013-11-15 16:15
	 */
	protected function mysqlInsert($tab,$arr = array(),$type='single',$lastid = false,$db = '',$showsql=false){


		$res = $this->mydb($db, $this->opr)->insert($tab,$arr,$type,$showsql);
		//只有执行成功才执行返回最后id的操作
		if($res)
		{
			$lastid && $res = $this->mydb($db, $this->opr)->last_insert_id();
		}
		$this->data_unset();

		return $res;
	}
	/**
	 * mysqlEdit
	 * 
	 * @Describe : mysql写入数据
	 * @Parm : $tab 表名
	 * @Parm : $arr array('表字段'=>更新值)
	 * @Parm : $where 数组条件 or 字符串 如 id>10
	 * @Parm : $db 空表示默认数据库
	 * @Parm : $showsql true/false 返回sql语句
	 * @Return : true/false/lastid
	 * @Author : zhangwenjun 
	 * @DataTime : 2013-11-15 16:15
	 */
	protected function mysqlEdit($tab, $arr = array(), $where ,$db = '' ,$showsql=false){

		$res = $this->mydb($db, $this->opr)->update($tab,$where,$arr,$showsql);

		$this->data_unset();

		return $res;
	}
	
	/**
	 * mysqlDelete
	 * 
	 * @Describe : 删除信息
	 * @Parm : $tab 表名
	 * @Parm : $where 数组条件 or 字符串 如 id>10
	 * @Parm : $db 空表示默认数据库
	 * @Parm : $showsql true/false 返回sql语句
	 * @Return : true/false
	 * @Author : zhangwenjun 
	 * @DataTime : 2013-11-15 16:43
	 */
	protected function mysqlDelete($tab, $where ,$db = '' ,$showsql=false){

		$this->flag_spl_rw == true && $this->opr = "R";
		$res = $this->mydb($db, $this->opr)->delete($tab, $where,$showsql);

		$this->data_unset();

		return $res;
	}
    protected function db($db = ''){
        $this->flag_spl_rw == true && $this->opr = "R";
        $res = $this->mydb($db, $this->opr);
        return $res;
    }
}

?>