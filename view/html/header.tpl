<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>后台管理系统</title>

    <link href="{WEBSITE_SOURCE_URL}/resources/plugins/fullPage/jquery.fullPage.css" rel="stylesheet"/>
    <link href="{WEBSITE_SOURCE_URL}/resources/plugins/bootstrap-3.3.0/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="{WEBSITE_SOURCE_URL}/resources/plugins/material-design-iconic-font-2.2.0/css/material-design-iconic-font.min.css" rel="stylesheet"/>
    <link href="{WEBSITE_SOURCE_URL}/resources/plugins/waves-0.7.5/waves.min.css" rel="stylesheet"/>
    <link href="{WEBSITE_SOURCE_URL}/resources/plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
    <link href="{WEBSITE_SOURCE_URL}/resources/css/admin.css" rel="stylesheet"/>

    <link href="{WEBSITE_SOURCE_URL}/resources/plugins/bootstrap-3.3.0/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="{WEBSITE_SOURCE_URL}/resources/plugins/material-design-iconic-font-2.2.0/css/material-design-iconic-font.min.css" rel="stylesheet"/>
    <link href="{WEBSITE_SOURCE_URL}/resources/plugins/bootstrap-table-1.11.0/bootstrap-table.min.css" rel="stylesheet"/>
    <link href="{WEBSITE_SOURCE_URL}/resources/plugins/waves-0.7.5/waves.min.css" rel="stylesheet"/>
    <link href="{WEBSITE_SOURCE_URL}/resources/plugins/jquery-confirm/jquery-confirm.min.css" rel="stylesheet"/>
    <link href="{WEBSITE_SOURCE_URL}/resources/plugins/select2/css/select2.min.css" rel="stylesheet"/>

    <link href="{WEBSITE_SOURCE_URL}/resources/css/common.css" rel="stylesheet"/>

    <script src="{WEBSITE_SOURCE_URL}/resources/plugins/jquery.1.12.4.min.js"></script>
    <script src="{WEBSITE_SOURCE_URL}/resources/plugins/bootstrap-3.3.0/js/bootstrap.min.js"></script>
    <script src="{WEBSITE_SOURCE_URL}/resources/plugins/waves-0.7.5/waves.min.js"></script>
    <script src="{WEBSITE_SOURCE_URL}/resources/plugins/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{WEBSITE_SOURCE_URL}/resources/plugins/BootstrapMenu.min.js"></script>
    <script src="{WEBSITE_SOURCE_URL}/resources/plugins/device.min.js"></script>
    <script src="{WEBSITE_SOURCE_URL}/resources/plugins/fullPage/jquery.fullPage.min.js"></script>
    <script src="{WEBSITE_SOURCE_URL}/resources/plugins/fullPage/jquery.jdirk.min.js"></script>
    <script src="{WEBSITE_SOURCE_URL}/resources/plugins/jquery.cookie.js"></script>

    <script src="{WEBSITE_SOURCE_URL}/resources/js/admin.js"></script>

    
    
    <style>
    /** skins **/
    #zheng-upms-server #header {background: #29A176;}
    #zheng-upms-server .content_tab{background: #29A176;}
    #zheng-upms-server .s-profile>a{background: url({WEBSITE_SOURCE_URL}/resources/images/zheng-upms.png) left top no-repeat;}
    
    #zheng-cms-admin #header {background: #455EC5;}
    #zheng-cms-admin .content_tab{background: #455EC5;}
    #zheng-cms-admin .s-profile>a{background: url({WEBSITE_SOURCE_URL}/resources/images/zheng-cms.png) left top no-repeat;}
    
    #zheng-pay-admin #header {background: #F06292;}
    #zheng-pay-admin .content_tab{background: #F06292;}
    #zheng-pay-admin .s-profile>a{background: url({WEBSITE_SOURCE_URL}/resources/images/zheng-pay.png) left top no-repeat;}
    
    #zheng-ucenter-home #header {background: #6539B4;}
    #zheng-ucenter-home .content_tab{background: #6539B4;}
    #zheng-ucenter-home .s-profile>a{background: url({WEBSITE_SOURCE_URL}/resources/images/zheng-ucenter.png) left top no-repeat;}
    
    #zheng-oss-web #header {background: #0B8DE5;}
    #zheng-oss-web .content_tab{background: #0B8DE5;}
    #zheng-oss-web .s-profile>a{background: url({WEBSITE_SOURCE_URL}/resources/images/zheng-oss.png) left top no-repeat;}
    
    #test #header {background: test;}
    #test .content_tab{background: test;}
    #test .s-profile>a{background: url(test) left top no-repeat;}
    </style>
</head>
<body>
<header id="header">
    <ul id="menu">
        <li id="guide" class="line-trigger">
            <div class="line-wrap">
                <div class="line top"></div>
                <div class="line center"></div>
                <div class="line bottom"></div>
            </div>
        </li>
        <li id="logo" class="hidden-xs">
            <a href="index.html">
                <!-- <img src="/chc/public/img/home/logo.png"/ height="40px"> -->
                <h2 style="display:inline;color:yellow;">CHC</h2>
            </a>
            <span id="system_title">后台 管理系统</span>
        </li>
        <li class="pull-right">
            <ul class="hi-menu">
                <!-- 搜索 -->
                <!-- <li class="dropdown">
                    <a class="waves-effect waves-light" data-toggle="dropdown" href="javascript:;">
                        <i class="him-icon zmdi zmdi-search"></i>
                    </a>
                    <ul class="dropdown-menu dm-icon pull-right">
                        <form id="search-form" class="form-inline">
                            <div class="input-group">
                                <input id="keywords" type="text" name="keywords" class="form-control" placeholder="搜索"/>
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                                </div>
                            </div>
                        </form>
                    </ul>
                </li> -->
                <!-- <li class="dropdown">
                    <a class="waves-effect waves-light" data-toggle="dropdown" href="javascript:;">
                        <i class="him-icon zmdi zmdi-dropbox"></i>
                    </a>
                    <ul class="dropdown-menu dm-icon pull-right">
                        <li class="skin-switch">
                            请选择系统切换
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="waves-effect switch-systems" href="javascript:;" systemid="1" systemname="zheng-upms-server" systemtitle="权限管理系统"><i class="zmdi zmdi-shield-security"></i> 权限管理系统</a>
                        </li>
                        
                        <li>
                            <a class="waves-effect switch-systems" href="javascript:;" systemid="2" systemname="zheng-cms-admin" systemtitle="内容管理系统"><i class="zmdi zmdi-wikipedia"></i> 内容管理系统</a>
                        </li>
                        
                        <li>
                            <a class="waves-effect switch-systems" href="javascript:;" systemid="3" systemname="zheng-pay-admin" systemtitle="支付管理系统"><i class="zmdi zmdi-paypal-alt"></i> 支付管理系统</a>
                        </li>
                        
                        <li>
                            <a class="waves-effect switch-systems" href="javascript:;" systemid="4" systemname="zheng-ucenter-home" systemtitle="用户管理系统"><i class="zmdi zmdi-account"></i> 用户管理系统</a>
                        </li>
                        
                        <li>
                            <a class="waves-effect switch-systems" href="javascript:;" systemid="5" systemname="zheng-oss-web" systemtitle="存储管理系统"><i class="zmdi zmdi-cloud"></i> 存储管理系统</a>
                        </li>
                    </ul>
                </li> -->
                <li class="dropdown">
                    <a class="waves-effect waves-light" data-toggle="dropdown" href="javascript:;">
                        <i class="him-icon zmdi zmdi-more-vert"></i>
                    </a>
                    <ul class="dropdown-menu dm-icon pull-right">
                        <!-- <li class="hidden-xs">
                            <a class="waves-effect" data-ma-action="fullscreen" href="javascript:fullPage();"><i class="zmdi zmdi-fullscreen"></i> 全屏模式</a>
                        </li>
                        <li>
                            <a class="waves-effect" data-ma-action="clear-localstorage" href="javascript:;"><i class="zmdi zmdi-delete"></i> 清除缓存</a>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-face"></i> 隐私管理</a>
                        </li>
                        <li>
                            <a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-settings"></i> 系统设置</a>
                        </li> -->
                        <li>
                            <a class="waves-effect" href="?m=index&a=login"><i class="zmdi zmdi-run"></i> 退出登录</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</header>
<section id="main">
    <!-- 左侧导航区 -->
    <aside id="sidebar">
        <!-- 个人资料区 -->
        <div class="s-profile">
            <a class="waves-effect waves-light" href="javascript:;">
                <div class="sp-pic">
                    <img src="{WEBSITE_SOURCE_URL}/resources/images/avatar.jpg"/>
                </div>
                <div class="sp-info">
                    管理员，您好！
                    <i class="zmdi zmdi-caret-down"></i>
                </div>
            </a>
            <ul class="main-menu">
                <!-- <li>
                    <a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-account"></i> 个人资料</a>
                </li>
                <li>
                    <a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-face"></i> 隐私管理</a>
                </li>
                <li>
                    <a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-settings"></i> 系统设置</a>
                </li> -->
                <li>
                    <a class="waves-effect" href="?m=index&a=login"><i class="zmdi zmdi-run"></i> 退出登录</a>
                </li>
            </ul>
        </div>
        <!-- /个人资料区 -->
        <!-- 菜单区 -->
        <ul class="main-menu">
            <li>
            <a class="waves-effect" href="javascript:Tab.addTab('首页', 'home');"><i class="zmdi zmdi-home"></i> 首页</a>
            </li>
            <li class="sub-menu system_menus system_1 0">
                <a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-accounts-list"></i> 会议管理 </a>
                <ul>
                    <li><a class="waves-effect" href="javascript:Tab.addTab('会议列表', '?m=events&a=index');">会议列表</a></li>
                    <!-- <li><a class="waves-effect" href="javascript:Tab.addTab('组织管理', '/manage/organization/index');">组织管理</a></li> -->
                </ul>
            </li>
            <!-- <li class="sub-menu system_menus system_1 0">
                <a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-accounts-list"></i> 系统组织管理</a>
                <ul>
                    <li><a class="waves-effect" href="javascript:Tab.addTab('系统管理', 'crud.html');">系统管理</a></li>
                    <li><a class="waves-effect" href="javascript:Tab.addTab('组织管理', '/manage/organization/index');">组织管理</a></li>
                </ul>
            </li> -->
            <!-- <li class="sub-menu system_menus system_1 3">
                <a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-accounts"></i> 角色用户管理</a>
                <ul>
                    <li><a class="waves-effect" href="javascript:Tab.addTab('角色管理', '/manage/role/index');">角色管理</a></li>
                    <li><a class="waves-effect" href="javascript:Tab.addTab('用户管理', '/manage/user/index');">用户管理</a></li>
                </ul>
            </li> -->
            <!-- <li class="sub-menu system_menus system_1 6">
                <a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-lock-outline"></i> 权限资源管理</a>
                <ul>
                    <li><a class="waves-effect" href="javascript:Tab.addTab('权限管理', '/manage/permission/index');">权限管理</a></li>
                </ul>
            </li> -->
            <!-- <li class="sub-menu system_menus system_1 7">
                <a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-more"></i> 其他数据管理</a>
                <ul>
                    <li><a class="waves-effect" href="javascript:Tab.addTab('公共码表', '/manage/coder/index');">公共码表</a></li>
                    <li><a class="waves-effect" href="javascript:Tab.addTab('会话管理', '/manage/session/index');">会话管理</a></li>
                    <li><a class="waves-effect" href="javascript:Tab.addTab('日志记录', '/manage/log/index');">日志记录</a></li>
                    <li><a class="waves-effect" href="javascript:Tab.addTab('键值设置', '/manage/map/index');">键值设置</a></li>
                </ul>
            </li> -->
            <!-- <li class="sub-menu system_menus system_2 12" style="display:none;">
                <a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-menu"></i> 标签类目管理</a>
                <ul>
                    <li><a class="waves-effect" href="javascript:Tab.addTab('标签管理', '/manage/tag/index');">标签管理</a></li>
                    <li><a class="waves-effect" href="javascript:Tab.addTab('类目管理', '/manage/category/index');">类目管理</a></li>
                </ul>
            </li> -->
            <!-- <li class="sub-menu system_menus system_2 15" style="display:none;">
                <a class="waves-effect" href="javascript:;"><i class="zmdi zmdi-collection-text"></i> 文章内容管理</a>
                <ul>
                    <li><a class="waves-effect" href="javascript:Tab.addTab('文章管理', '/manage/article/index');">文章管理</a></li>
                    <li><a class="waves-effect" href="javascript:Tab.addTab('回收管理', '/manage/article/recycle');">回收管理</a></li>
                </ul>
            </li> -->
            <li>
            <div class="upms-version">
                &copy; CHC
            </div>
            </li>
        </ul>
        <!-- /菜单区 -->
    </aside>
    <!-- /左侧导航区 -->
    <section id="content">
        <div class="content_tab">
            <div class="tab_left">
                <a class="waves-effect waves-light" href="javascript:;"><i class="zmdi zmdi-chevron-left"></i></a>
            </div>
            <div class="tab_right">
                <a class="waves-effect waves-light" href="javascript:;"><i class="zmdi zmdi-chevron-right"></i></a>
            </div>
            <ul id="tabs" class="tabs">
                <li id="tab_home" data-index="home" data-closeable="false" class="cur">
                    <a class="waves-effect waves-light">首页</a>
                </li>
            </ul>
        </div>