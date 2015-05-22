<?php
/**
 * Copyright © 艾瑞咨询集团(http://www.iresearch.com.cn/)
 * cookie封装
 * cookie 类
 * Author Zhangwenjun <zhangwenjun@iresearch.com.cn>
 * Create 13-11-15 18:45
 */
class Cookie
{
    /**
     * 存储Cookie的命名前缀
     * @access private
     * @var string
     */
    private $prefix = SITE_PREFIX;


    public function setPrefix($prefix = ''){
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * 返回Cookie的单例
     * @access public
     * @return object Cookie类的实例
     */
    public static function instance($prefix = SITE_PREFIX)
    {
        static $instance;

        if (! $instance)
        {
            $instance = new Cookie($prefix);
        }
        return $instance;
    }

    /**
     * 获取Cookie值
     * @access public
     * @param string $key 需要获取的Cookie名
     * @param mixed $default 当不存在需要获取的Cookie值时的默认值
     * @return mixed 返回的Cookie值
     */
    public function get($key = null, $default = null)
    {
        if ($key)
        {
            $key = $this->prefix . $key;
            if (isset($_COOKIE[$key]))
            {
                return $_COOKIE[$key];
            }
            else
            {
                return $default;
            }
        }
        else
        {
            return $default;
        }
    }
    
    /**
     * 返回所有Cookie数据
     * @access public
     * @return array 返回的所有Cookie数据
     */
    public function getAll()
    {
        return $_COOKIE;
    }

    /**
     * 设置Cookie值
     * @access public
     * @param string $key 需要设置的Cookie名
     * @param string $value 需要设置的Cookie值
     * @param int $time 时间 秒
     * @param string $path 路径
     * @param string $domain 域
     */
    public function set($key, $value,$time = 86400,$path = '/',$domain = COOKIE_DOMAIN)
    {
        $key = $this->prefix . $key;
        setcookie($key,$value,time()+$time,$path, $domain);
    }

    /**
     * 删除某Cookie值
     * @access public
     * @param string $key 需要设置的Cookie名
     * @param int $time 时间 秒
     * @param string $path 路径
     * @param string $domain 域
     */
    public function del($key,$time = 86400,$path = '/',$domain = COOKIE_DOMAIN)
    {
        $key = $this->prefix . $key;
        setcookie($key,NULL,time()-$time,$path, $domain);
    }

    /**
     * 删除某Cookie值，del()方法的别名
     * @see del
     */
    public function delete($key,$time = 86400,$path = '/',$domain = COOKIE_DOMAIN)
    {
        $this->del($key,$time,$path,$domain);
    }
}