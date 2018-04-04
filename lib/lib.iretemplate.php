<?php
	/**
	 * Copyright © 艾瑞咨询集团(http://www.iresearch.com.cn/)
	 * 模板类
	 * Author Zhangwenjun <zhangwenjun@iresearch.com.cn>
	 * Create 13-11-15 09:45
	 */
	class IreTemplate
	{
		/**
		* Whether to store compiled php code or not (for debug purpose)
		*
		* @access public
		*/
		var $reuse_code		= false;

		/**
		* Directory where all templates are stored
		* Can be overwritten by global configuration array $_CONFIG['template_dir']
		*
		* @access public
		*/
		var $template_dir	= 'templates/';

		/**
		* Where to store compiled templates
		* Can be overwritten by global configuration array $_CONFIG['smarttemplate_compiled']
		*
		* @access public
		*/
		var $temp_dir		= 'templates_c/';

		/**
		* Temporary folder for output cache storage
		* Can be overwritten by global configuration array $_CONFIG['smarttemplate_cache']
		*
		* @access public
		*/
		var $cache_dir      =  'tps_cache/';

		/**
		* Default Output Cache Lifetime in Seconds
		* Can be overwritten by global configuration array $_CONFIG['cache_lifetime']
		*
		* @access public
		*/
		var $cache_lifetime =  600;

		/**
		* Temporary file for output cache storage
		*
		* @access private
		*/
		var $cache_filename;

		/**
		* The template filename
		*
		* @access private
		*/
		var $tpl_file;

		/**
		* The compiled template filename
		*
		* @access private
		*/
		var $cpl_file;

		/**
		* Template content array
		*
		* @access private
		*/
		var $data = array();

		var $data_cache = array();

		/**
		* Parser Class
		*
		* @access private
		*/
		var $parser;

		/**
		* Debugger Class
		*
		* @access private
		*/
		var $debugger;

		/**
		* SmartTemplate Constructor
		*
		* @access public
		* @param string $template_filename Template Filename
		*/
		// function IreTemplate ( $template_filename = '' )
		function __construct ( $template_filename = '' )
		{
			global $_CONFIG;

			if (!empty($_CONFIG['iretemplate_compiled']))
			{
				$this->temp_dir  =  $_CONFIG['iretemplate_compiled'];
			}
			if (!empty($_CONFIG['iretemplate_cache']))
			{
				$this->cache_dir  =  $_CONFIG['iretemplate_cache'];
			}
			if (is_numeric($_CONFIG['cache_lifetime']))
			{
				$this->cache_lifetime  =  $_CONFIG['cache_lifetime'];
			}
			//if (!empty($_CONFIG['template_dir'])  &&  is_file($_CONFIG['template_dir'] . '/' . $template_filename))
			if (!empty($_CONFIG['template_dir']))
			{
				$this->template_dir  =  $_CONFIG['template_dir'];
			}
			$this->tpl_file  =  $template_filename;
		}

		//  DEPRECATED METHODS
		//	Methods used in older parser versions, soon will be removed
		function set_templatefile ($template_filename)	{	$this->tpl_file  =  $template_filename;	}
		function add_value ($name, $value )				{	$this->assign($name, $value);	}
		function add_array ($name, $value )				{	$this->append($name, $value);	}


		/**
		* Assign Template Content
		*
		* Usage Example:
		* $page->assign( 'TITLE',     'My Document Title' );
		* $page->assign( 'userlist',  array(
		*                                 array( 'ID' => 123,  'NAME' => 'John Doe' ),
		*                                 array( 'ID' => 124,  'NAME' => 'Jack Doe' ),
		*                             );
		*
		* @access public
		* @param string $name Parameter Name
		* @param mixed $value Parameter Value
		* @desc Assign Template Content
		*/
		function assign ( $name, $value = '' )
		{
			if (is_array($name))
			{
				foreach ($name as $k => $v)
				{
					$this->data[$k]  =  $v;
				}
			}
			else
			{
				$this->data[$name]  =  $value;
			}
		}

		function assign_cache ( $name, $value = '' )
		{
			if (is_array($name))
			{
				foreach ($name as $k => $v)
				{
					$this->data_cache[$k]  =  $v;
				}
			}
			else
			{
				$this->data_cache[$name]  =  $value;
			}
		}


		/**
		* Assign Template Content
		*
		* Usage Example:
		* $page->append( 'userlist',  array( 'ID' => 123,  'NAME' => 'John Doe' ) );
		* $page->append( 'userlist',  array( 'ID' => 124,  'NAME' => 'Jack Doe' ) );
		*
		* @access public
		* @param string $name Parameter Name
		* @param mixed $value Parameter Value
		* @desc Assign Template Content
		*/
		function append ( $name, $value )
		{
			if (is_array($value))
			{
				$this->data[$name][]  =  $value;
			}
			elseif (!is_array($this->data[$name]))
			{
				$this->data[$name]  .=  $value;
			}
		}


		/**
		* Parser Wrapper
		* Returns Template Output as a String
		*
		* @access public
		* @param array $_top Content Array
		* @return string  Parsed Template
		* @desc Output Buffer Parser Wrapper
		*/
		function result ( $_top = '' )
		{
			ob_start();
			$this->output( $_top );
			$result  =  ob_get_contents();
			ob_end_clean();
			return $result;
		}


		/**
		* Execute parsed Template
		* Prints Parsing Results to Standard Output
		*
		* @access public
		* @param array $_top Content Array
		* @desc Execute parsed Template
		*/
		function output ( $_top = '' )
		{
			global $_top;

			//	Make sure that folder names have a trailing '/'
			if (strlen($this->template_dir)  &&  substr($this->template_dir, -1) != '/')
			{
				$this->template_dir  .=  '/';
			}
			if (strlen($this->temp_dir)  &&  substr($this->temp_dir, -1) != '/')
			{
				$this->temp_dir  .=  '/';
			}
			//	Prepare Template Content
			if (!is_array($_top))
			{
				if (strlen($_top))
				{
					$this->tpl_file  =  $_top;
				}
				$_top  =  $this->data;
			}
			$_obj  =  &$_top;
			$_stack_cnt  =  0;
			$_stack[$_stack_cnt++]  =  $_obj;

			//	Check if template is already compiled
			$cpl_file_name = preg_replace('/[:\/.\\\\]/', '_', $this->tpl_file);
			if (strlen($cpl_file_name) > 0)
			{
	    		$this->cpl_file  =  $this->temp_dir . $cpl_file_name . '.php';
				$compile_template  =  true;
				if ($this->reuse_code)
				{
					if (is_file($this->cpl_file))
					{
						if ($this->mtime($this->cpl_file) > $this->mtime($this->template_dir . $this->tpl_file))
						{
							$compile_template  =  false;
						}
					}
				}
				if ($compile_template)
				{
					if (true)//@include_once("class.smarttemplateparser.cls")
					{
						$this->parser = new IreTemplateParser($this->template_dir . $this->tpl_file);
						if (!$this->parser->compile($this->cpl_file))
						{
							exit( "IreTemplate Parser Error: " . $this->parser->error );
						}
					}
					else
					{
						exit( "IreTemplate Error: Cannot find class.iretemplateparser.php; check IreTemplate installation");
					}
				}
				//	Execute Compiled Template
				include($this->cpl_file);
			}
			else
			{
				exit( "IreTemplate Error: You must set a template file name");
			}
			//	Delete Global Content Array in order to allow multiple use of SmartTemplate class in one script
			//unset ($_top);
			unset($GLOBALS['_top']);
		}


		/**
		* Debug Template
		*
		* @access public
		* @param array $_top Content Array
		* @desc Debug Template
		*/
		function debug ( $_top = '' )
		{
			//	Prepare Template Content
			if (!$_top)
			{
				$_top  =  $this->data;
			}
			if (@include_once("class.iretemplatedebugger.php"))
			{
				$this->debugger = new IreTemplateDebugger($this->template_dir . $this->tpl_file);
				$this->debugger->start($_top);
			}
			else
			{
				exit( "IreTemplate Error: Cannot find class.iretemplatedebugger.php; check IreTemplate installation");
			}
		}


		/**
		* Start Ouput Content Buffering
		*
		* Usage Example:
		* $page = new SmartTemplate('template.html');
		* $page->use_cache();
		* ...
		*
		* @access public
		* @desc Output Cache
		*/
		function use_cache ( $key = '' )
		{
			if (empty($_POST))
			{
				$this->cache_filename  =  $this->cache_dir . 'cache_' . md5($_SERVER['REQUEST_URI'] . serialize($key)) . '.ser';
				if (($_SERVER['HTTP_CACHE_CONTROL'] != 'no-cache')  &&  ($_SERVER['HTTP_PRAGMA'] != 'no-cache')  &&  @is_file($this->cache_filename))
				{
					if ((time() - filemtime($this->cache_filename)) < $this->cache_lifetime)
					{
						readfile($this->cache_filename);
						exit;
					}
				}
				ob_start( array( &$this, 'cache_callback' ) );
			}
		}

		function use_cache_dynamic ( $key = '' )
		{
			if (empty($_POST))
			{
				$this->cache_filename  =  $this->cache_dir . 'cache_' . md5($_SERVER['REQUEST_URI'] . serialize($key)) . '.ser';
				if (($_SERVER['HTTP_CACHE_CONTROL'] != 'no-cache')  &&  ($_SERVER['HTTP_PRAGMA'] != 'no-cache')  &&  @is_file($this->cache_filename))
				{
					if ((time() - filemtime($this->cache_filename)) < $this->cache_lifetime)
					{
						$fso = fopen($this->cache_filename, 'r');
						$data = fread($fso, filesize($this->cache_filename));
						fclose($fso);
						foreach($this->data_cache as $key => $value){
							$data = str_replace("{\$".$key."}",$value,$data);
						}
						echo $data;
						exit;
					}
				}
				ob_start( array( &$this, 'cache_callback_dynamic' ) );
			}
		}


		/**
		* Output Buffer Callback Function
		*
		* @access private
		* @param string $output
		* @return string $output
		*/
		function cache_callback ( $output )
		{	
			if ($hd = @fopen($this->cache_filename, 'w'))
			{	
				fputs($hd,  $output);
				fclose($hd);
			}
			return $output;
		}

		function cache_callback_dynamic ( $output )
		{	
			if ($hd = @fopen($this->cache_filename, 'w'))
			{	
				fputs($hd,  $output);
				fclose($hd);
			}
			foreach($this->data_cache as $key => $value){
				$output = str_replace("{\$".$key."}",$value,$output);
			}
			return $output;
		}
		/**
		* Determine Last Filechange Date (if File exists)
		*
		* @access private
		* @param string $filename
		* @return mixed
		* @desc Determine Last Filechange Date
		*/
		function mtime ( $filename )
		{
			if (@is_file($filename))
			{
				$ret = filemtime($filename);
				return $ret;
			}
		}

		//Add by zwj at 2008-4-22
		function set_tpl_folder ( $tpl_folder )
		{
			$this->temp_dir=$this->temp_dir.$tpl_folder."/";
			$this->template_dir  =  $this->template_dir.$tpl_folder."/";
			if (!file_exists($this->temp_dir)) {
				mkdirs($this->temp_dir);
			}
		}
	}
?>