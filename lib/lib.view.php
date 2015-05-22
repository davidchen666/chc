<?php
/**
 * Copyright © 艾瑞咨询集团(http://www.iresearch.com.cn/)
 * view
 * Author Zhangwenjun <zhangwenjun@iresearch.com.cn>
 * Create 13-11-15 09:45
 */

//引入模板引擎

//require_once('../config.inc.php');

require_once(ROOT_PATH . LIB .DS .LIB . '.iretemplate.php');
require_once(ROOT_PATH . LIB .DS .LIB . '.iretemplateparser.php');

//模板路径 
$_CONFIG['template_dir'] = VIEW_PATH . 'html' . DS;
$_CONFIG['iretemplate_compiled'] = VIEW_PATH . 'html_cpl' . DS;
$_CONFIG['iretemplate_cache'] = VIEW_PATH . 'html_cache' . DS;
$_CONFIG['cache_lifetime'] = 30;

class View {
   static private $instance = null;
   static private $view = null;

   function __construct($view){

       if(null === self::$view){

           self::$view = new IreTemplate($view);

       }

   }

  static function instance($view){
	
	  global $_CONFIG;

      if (!file_exists($_CONFIG['template_dir'] . $view)){

          p('View not found in dir:'. $_CONFIG['template_dir'] . $view);
      }
      
      if(null === self::$instance){

          self::$instance = new self($view);

      }
		
	  return self::$instance;

   }

    function show($data = array()){

		if(!is_array($data)){

			exit('params errors');
		}

		template_ini(self::$view);


        self::$view->assign($data);

        self::$view->output();
    }

     function html($view,$data = array()){
        ob_start();
        self::instance($view)->show( $data );
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

}

class ViewM {
    static private $instance = null;
    static private $view = null;

    function __construct($view){

        if(null === self::$view){

            self::$view = new IreTemplate($view);

        }

    }

    static function instance($view){

        global $_CONFIG;

        if (!file_exists($_CONFIG['template_dir'] . $view)){

            p('View not found in dir:'. $_CONFIG['template_dir'] . $view);
        }

        if(null === self::$instance){

            self::$instance = new self($view);

        }

        return self::$instance;

    }

    function show($data = array()){

        if(!is_array($data)){

            exit('params errors');
        }

        template_ini(self::$view);


        self::$view->assign($data);

        self::$view->output();
    }

    function htmlM($view,$data = array()){
        ob_start();
        self::instance($view)->show( $data );
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

}
?>