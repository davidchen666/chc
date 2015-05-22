<?php
/**
 * Copyright © 艾瑞咨询集团(http://www.iresearch.com.cn/)
 * session 封装
 * session
 * Author Zhangwenjun <zhangwenjun@iresearch.com.cn>
 * Create 13-11-15 09:45
 */
class Session
{
    /**
     * 判断是否启用session_start的标志符
     * @access private
     * @var bool
     */
    private $is_start = false;

    /**
     * 存储SESSION的命名前缀
     * @access private
     * @var string
     */
    private $prefix;


    function __construct($prefix = SITE_PREFIX)
    {
        $this->prefix = $prefix;
        ob_start();
    }

    /**
     * 返回Session的单例
     * @access public
     * @return object Session类的实例
     */
    public static function instance($prefix = SITE_PREFIX)
    {
        static $instance;

        if (! $instance)
        {
            $instance = new Session($prefix);
        }
        return $instance;
    }

    /**
     * 获取Session值
     * @access public
     * @param string $key 需要获取的Session名
     * @param mixed $default 当不存在需要获取的Session值时的默认值
     * @return mixed 返回的Session值
     */
    public function get($key = null, $default = null)
    {
        $this->session_start();
        
        if ($key)
        {
            $key = $this->prefix . $key;

            if (isset($_SESSION[$key]))
            {
                return $_SESSION[$key];
            }
            else
            {
                return $default;
            }
        }
        else
        {
            return $this->getAll();
        }
    }
    
    /**
     * 返回所有Session数据
     * @access public
     * @return array 返回的所有Session数据
     */
    public function getAll()
    {
        return $_SESSION;
    }

    /**
     * 设置Session值
     * @access public
     * @param string $key 需要设置的Session名
     * @param mixed $value 需要设置的Session值
     */
    public function set($key, $value)
    {
        $this->session_start();
        
        $key = $this->prefix . $key;
        $_SESSION[$key] = $value;
    }

    /**
     * 删除某Session值
     * @access public
     * @param string $key 需要删除的Session名
     */
    public function del($key)
    {
        $this->session_start();
        
        $key = $this->prefix . $key;
        unset($_SESSION[$key]);
    }

    /**
     * 删除某Session值，del()方法的别名
     * @see del
     */
    public function delete($key)
    {
        $this->session_start();

        $key = $this->prefix . $key;
        $this->del($key);
    }

    /**
     * 销毁所有Session数据
     * @access public
     */
    public function destroy()
    {
        $this->session_start();
        $this->is_start = false;
        $_SESSION = array();
    }

    /**
     * 启动Session
     * @access private
     */
    private function session_start()
    {
        if (! $this->is_start)
        {
            session_start();
            session_cache_limiter('nocache');
            $this->is_start = true;
//
//            $uauth = md5(getIp());
//            if (!$this->get('uauth'))
//            {
//                $this->set('uauth', $uauth);
//            }
//            else if ($uauth != $this->get('uauth'))
//            {
//                $this->destroy();
//            }
        }
    }

}

?>