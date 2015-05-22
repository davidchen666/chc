<?php
class ServiceModel extends Api {
	function getExec($where){
		$ret = $this->get_exec($where);
		return $ret;
	}
}