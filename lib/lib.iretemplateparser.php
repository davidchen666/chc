<?php
	/**
	 * Copyright © 艾瑞咨询集团(http://www.iresearch.com.cn/)
	 * 模板解析类
	 * Author Zhangwenjun <zhangwenjun@iresearch.com.cn>
	 * Create 13-11-15 09:45
	 */
	class IreTemplateParser
	{
		/**
		* The template itself
		*
		* @access private1
		*/
		var $template;

		/**
		* The template filename used to extract the dirname for subtemplates
		*
		* @access private
		*/
		var $template_dir;

		/**
		* List of used IreTemplate Extensions
		*
		* @access private
		*/
		var $extension_tagged  =  array();

		/**
		* Error messages
		*
		* @access public
		*/
		var $error;

		/**
		* IreTemplateParser Constructor
		*
		* @param string $template_filename HTML Template Filename
		*/
		function IreTemplateParser ( $template_filename )
		{
			// Load Template
			if ($hd = @fopen($template_filename, "r"))
			{
				if (filesize($template_filename))
				{
					$this->template = fread($hd, filesize($template_filename));
				}
				else
				{
					$this->template = "IreTemplate Parser Error: File size is zero byte: '$template_filename'";
				}
				fclose($hd);
				// Extract the name of the template directory
				$this->template_dir = dirname($template_filename);
			}
			else
			{
				$this->template = "IreTemplate Parser Error: File not found: '$template_filename'";
			}
		}

		/**
		* Main Template Parser
		*
		* @param string $compiled_template_filename Compiled Template Filename
		* @desc Creates Compiled PHP Template
		*/
		function compile( $compiled_template_filename = '' )
		{
			if (empty($this->template))
			{
				return;
			}
			/* Quick hack to allow subtemplates */
			if(preg_match("/<!-- INCLUDE/", $this->template))
			{
				while ($this->count_subtemplates() > 0)
				{
					preg_match_all('/<!-- INCLUDE ([a-zA-Z0-9_.\/]+) -->/', $this->template, $tvar);
					foreach($tvar[1] as $subfile)
					{	
						if(strpos($subfile,'../')!==false){
							$tmpfile=str_replace("../","",$subfile);
							$inclued_file=dirname($this->template_dir)."/$tmpfile";
						}else{
							$inclued_file=$this->template_dir . "/$subfile";
						}
						if(file_exists($inclued_file))
						{
							$subst = implode('',file($inclued_file));
						}
						else
						{
							$subst = 'IreTemplate Parser Error: Subtemplate not found: \''.$inclued_file.'\'';
						}
						$this->template = str_replace("<!-- INCLUDE $subfile -->", $subst, $this->template);
					}
				}
			}
			//	END, ELSE Blocks
			$page  =  preg_replace("/<!-- ENDIF.+?-->/",  "<?php\n}\n?>",  $this->template);
			$page  =  preg_replace("/<!-- END[ a-zA-Z0-9_.]* -->/",  "<?php\n}\n\$_obj=\$_stack[--\$_stack_cnt];}\n?>",  $page);
			$page  =  str_replace("<!-- ELSE -->",  "<?php\n} else {\n?>",  $page);

			//	'BEGIN - END' Blocks
			if (preg_match_all('/<!-- BEGIN ([a-zA-Z0-9_.]+) -->/', $page, $var))
			{
				foreach ($var[1] as $tag)
				{
					list($parent, $block)  =  $this->var_name($tag);
					$code  =  "<?php\n"
							. "if (!empty(\$$parent"."['$block'])){\n"
							. "if (!is_array(\$$parent"."['$block']))\n"
							. "\$$parent"."['$block']=array(array('$block'=>\$$parent"."['$block']));\n"
							. "\$_tmp_arr_keys=array_keys(\$$parent"."['$block']);\n"
							. "if (\$_tmp_arr_keys[0]!='0')\n"
							. "\$$parent"."['$block']=array(0=>\$$parent"."['$block']);\n"
							. "\$_stack[\$_stack_cnt++]=\$_obj;\n"
							. "foreach (\$$parent"."['$block'] as \$rowcnt=>\$$block) {\n"
							. "\$$block"."['ROWCNT']=\$rowcnt;\n"
							. "\$$block"."['ROWNUM']=\$rowcnt+1;\n"
							. "\$$block"."['ALTROW']=\$rowcnt%2;\n"
							. "\$$block"."['ROWBIT']=\$rowcnt%2;\n"
							. "\$_obj=&\$$block;\n?>";
					$page  =  str_replace("<!-- BEGIN $tag -->",  $code,  $page);
				}
			}

			//	'IF nnn=mmm' Blocks
			if (preg_match_all('/<!-- (ELSE)?IF ([a-zA-Z0-9_.]+)[ ]*([!=<>]+)[ ]*(["]?[^"]*["]?) -->/', $page, $var))
			{
				foreach ($var[2] as $cnt => $tag)
				{
					list($parent, $block)  =  $this->var_name($tag);
					$cmp   =  $var[3][$cnt];
					$val   =  $var[4][$cnt];
					$else  =  ($var[1][$cnt] == 'ELSE') ? '} else' : '';
					if ($cmp == '=')
					{
						$cmp  =  '==';
					}
					
					if (preg_match('/"([^"]*)"/',$val,$matches))
					{
						$code  =  "<?php\n$else"."if (\$$parent"."['$block'] $cmp \"".$matches[1]."\"){\n?>";
					}
					elseif (preg_match('/([^"]*)/',$val,$matches))
					{
						list($parent_right, $block_right)  =  $this->var_name($matches[1]);
						$code  =  "<?php\n$else"."if (\$$parent"."['$block'] $cmp \$$parent_right"."['$block_right']){\n?>";
					}
					
					$page  =  str_replace($var[0][$cnt],  $code,  $page);
				}
			}

			//	'IF nnn' Blocks
			if (preg_match_all('/<!-- (ELSE)?IF ([a-zA-Z0-9_.]+) -->/', $page, $var))
			{
				foreach ($var[2] as $cnt => $tag)
				{
					$else  =  ($var[1][$cnt] == 'ELSE') ? '} else' : '';
					list($parent, $block)  =  $this->var_name($tag);
					$code  =  "<?php\n$else"."if (!empty(\$$parent"."['$block'])){\n?>";
					$page  =  str_replace($var[0][$cnt],  $code,  $page);
				}
			}

			//	Replace Scalars
			if (preg_match_all('/{([a-zA-Z0-9_. >]+)}/', $page, $var))
			{
				foreach ($var[1] as $fulltag)
				{
					//	Determin Command (echo / $obj[n]=)
					list($cmd, $tag)  =  $this->cmd_name($fulltag);

					list($block, $skalar)  =  $this->var_name($tag);
					$code  =  "<?php\n$cmd \$$block"."['$skalar'];\n?>\n";
					$page  =  str_replace('{'.$fulltag.'}',  $code,  $page);
				}
			}


			//	ROSI Special: Replace Translations
			if (preg_match_all('/<"([a-zA-Z0-9_.]+)">/', $page, $var))
			{
				foreach ($var[1] as $tag)
				{
					list($block, $skalar)  =  $this->var_name($tag);
					$code  =  "<?php\necho gettext('$skalar');\n?>\n";
					$page  =  str_replace('<"'.$tag.'">',  $code,  $page);
				}
			}


			//	Include Extensions
			$header = '';
			if (preg_match_all('/{([a-zA-Z0-9_]+):([^}]*)}/', $page, $var))
			{
				/* zwj(2010-5-22):注释掉:针对页面内套用css样式编译会出问题的处理。
				foreach ($var[2] as $cnt => $tag)
				{
					//	Determin Command (echo / $obj[n]=)
					list($cmd, $tag)  =  $this->cmd_name($tag);

					$extension  =  $var[1][$cnt];
					if (!isset($this->extension_tagged[$extension]))
					{
						$header  .=  @include_once \"Iretemplate_extensions/Iretemplate_extension_$extension.php\";\n";
						$this->extension_tagged[$extension]  =  true;
					}
					if (!strlen($tag))
					{
						$code  =  "<?php\n$cmd Iretemplate_extension_$extension();\n?>\n";
					}
					elseif (substr($tag, 0, 1) == '"')
					{
						$code  =  "<?php\n$cmd Iretemplate_extension_$extension($tag);\n?>\n";
					}
					elseif (strpos($tag, ','))
					{
						list($tag, $addparam)  =  explode(',', $tag, 2);
						list($block, $skalar)  =  $this->var_name($tag);
						if (preg_match('/^([a-zA-Z_]+)/', $addparam, $match))
						{
							$nexttag   =  $match[1];
							list($nextblock, $nextskalar)  =  $this->var_name($nexttag);
							$addparam  =  substr($addparam, strlen($nexttag));
							$code  =  "<?php\n$cmd Iretemplate_extension_$extension(\$$block"."['$skalar'],\$$nextblock"."['$nextskalar']"."$addparam);\n?>\n";
						}
						else
						{
							$code  =  "<?php\n$cmd Iretemplate_extension_$extension(\$$block"."['$skalar'],$addparam);\n?>\n";
						}
					}
					else
					{
						list($block, $skalar)  =  $this->var_name($tag);
						$code  =  "<?php\n$cmd Iretemplate_extension_$extension(\$$block"."['$skalar']);\n?>\n";
					}
					$page  =  str_replace($var[0][$cnt],  $code,  $page);
				}
				*/
			}

			//	Add Include Header
			if (isset($header) && !empty($header))
			{
				$page  =  "<?php\n$header\n?>$page";
			}

			//	Store Code to Temp Dir
			if (strlen($compiled_template_filename))
			{
		        if ($hd  =  fopen($compiled_template_filename,  "w"))
		        {
			        fwrite($hd,  $page);
			        fclose($hd);
			        return true;
			    }
			    else
			    {
			    	$this->error  =  "Could not write compiled file.";
			        return false;
			    }
			}
			else
			{
				return $page;
			}
		}


		/**
		* Splits Template-Style Variable Names into an Array-Name/Key-Name Components
		* {example}               :  array( "_obj",                   "example" )  ->  $_obj['example']
		* {example.value}         :  array( "_obj['example']",        "value" )    ->  $_obj['example']['value']
		* {example.0.value}       :  array( "_obj['example'][0]",     "value" )    ->  $_obj['example'][0]['value']
		* {top.example}           :  array( "_stack[0]",              "example" )  ->  $_stack[0]['example']
		* {parent.example}        :  array( "_stack[$_stack_cnt-1]",  "example" )  ->  $_stack[$_stack_cnt-1]['example']
		* {parent.parent.example} :  array( "_stack[$_stack_cnt-2]",  "example" )  ->  $_stack[$_stack_cnt-2]['example']
		*
		* @param string $tag Variale Name used in Template
		* @return array  Array Name, Key Name
		* @access private
		* @desc Splits Template-Style Variable Names into an Array-Name/Key-Name Components
		*/
		function var_name($tag)
		{
			$parent_level  =  0;
			while (substr($tag, 0, 7) == 'parent.')
			{
				$tag  =  substr($tag, 7);
				$parent_level++;
			}
			if (substr($tag, 0, 4) == 'top.')
			{
				$obj  =  '_stack[0]';
				$tag  =  substr($tag,4);
			}
			elseif ($parent_level)
			{
				$obj  =  '_stack[$_stack_cnt-'.$parent_level.']';
			}
			else
			{
				$obj  =  '_obj';
			}
			while (is_int(strpos($tag, '.')))
			{
				list($parent, $tag)  =  explode('.', $tag, 2);
				if (is_numeric($parent))
				{
					$obj  .=  "[" . $parent . "]";
				}
				else
				{
					$obj  .=  "['" . $parent . "']";
				}
			}
			$ret = array($obj, $tag);
			return $ret;
		}


		/**
		* Determine Template Command from Variable Name
		* {variable}             :  array( "echo",              "variable" )  ->  echo $_obj['variable']
		* {variable > new_name}  :  array( "_obj['new_name']=", "variable" )  ->  $_obj['new_name']= $_obj['variable']
		*
		* @param string $tag Variale Name used in Template
		* @return array  Array Command, Variable
		* @access private
		* @desc Determine Template Command from Variable Name
		*/
		function cmd_name($tag)
		{
			if (preg_match('/^(.+) > ([a-zA-Z0-9_.]+)$/', $tag, $tagvar))
			{
				$tag  =  $tagvar[1];
				list($newblock, $newskalar)  =  $this->var_name($tagvar[2]);
				$cmd  =  "\$$newblock"."['$newskalar']=";
			}
			else
			{
				$cmd  =  "echo";
			}
			$ret = array($cmd, $tag);
			return $ret;
		}

		/**
		* @return int Number of subtemplate included
		* @access private
		* @desc Count number of subtemplates included in current template
		*/
		function count_subtemplates()
		{
			preg_match_all('/<!-- INCLUDE ([a-zA-Z0-9_.\/]+) -->/', $this->template, $tvar);
			$count_subtemplates = count($tvar[1]);
			$ret = intval($count_subtemplates);
			return $ret;
		}
	}
?>