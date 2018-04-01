<!DOCTYPE html>
<html lang="zh">
<head>
    <title>CHC医疗咨询</title>
	<meta charset=utf-8"UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />
	<meta name="renderer" content="webkit|ie-comp|ie-stand" />
	<meta name="author" content="lichen,1000zhu.com" />
    
	<link href="{WEBSITE_SOURCE_URL}/default/css/bootstrap.min.css" rel="stylesheet" />
	<link href="{WEBSITE_SOURCE_URL}/default/fonts/FontAwesome/font-awesome.css" rel="stylesheet" />
	<link href="{WEBSITE_SOURCE_URL}/default/css/animate.css" rel="stylesheet" />
	<link href="{WEBSITE_SOURCE_URL}/default/css/bootsnav.css" rel="stylesheet" />
	<link href="{WEBSITE_SOURCE_URL}/default/plugin/swiper3/css/swiper.min.css" rel="stylesheet" />
	<link href="{WEBSITE_SOURCE_URL}/default/css/style.css" rel="stylesheet" />  
    
    <script src="{WEBSITE_SOURCE_URL}/js/lib/vendor/jquery.1.9.1.min.js"></script>
    <script src="{WEBSITE_SOURCE_URL}/default/js/prefixfree.min.js"></script>
	<script src="{WEBSITE_SOURCE_URL}/default/js/bootstrap.min.js"></script>
	<script src="{WEBSITE_SOURCE_URL}/default/js/bootsnav.js"></script>
    <script src="{WEBSITE_SOURCE_URL}/default/plugin/swiper3/js/swiper.min.js"></script>
    <script src="{WEBSITE_SOURCE_URL}/default/plugin/swiper3/js/swiper.animate1.0.2.min.js"></script>
    <script src="{WEBSITE_SOURCE_URL}/default/js/public.js"></script>
    <script src="{WEBSITE_SOURCE_URL}/default/js/wow.min.js"></script>
    <script>
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: false,
            live: true
        });
        wow.init();
    </script>
	<!--[if lt IE 9]>
	  <script src="{WEBSITE_SOURCE_URL}/default/js/html5shiv.min.js"></script>
	  <script src="{WEBSITE_SOURCE_URL}/default/js/respond.min.js"></script>
	<![endif]-->
    <link rel="stylesheet" type="text/css" href="{WEBSITE_SOURCE_URL}/default/css/slit-slider.css" />
    <script type="text/javascript" src="{WEBSITE_SOURCE_URL}/default/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="{WEBSITE_SOURCE_URL}/default/js/jquery.ba-cond.min.js"></script>
	<script type="text/javascript" src="{WEBSITE_SOURCE_URL}/default/js/jquery.slitslider.js"></script>
	<script type="text/javascript" src="{WEBSITE_SOURCE_URL}/default/js/banner.js"></script>
	<meta name="keywords" content="CHC" />
    <meta name="description" content="CHC" />
    <!-- <link href="{WEBSITE_SOURCE_URL}/img/home/logo.png" rel="shortcut icon" /> -->
    <link rel="stylesheet" href="{WEBSITE_SOURCE_URL}/css/home.css">
    <link rel="stylesheet" href="{WEBSITE_SOURCE_URL}/css/events.css">
	<link rel="stylesheet" href="{WEBSITE_SOURCE_URL}/css/alliance.css">
</head>
<body style="">
<header class="headerBg navbar-fixed-top active2">
    <nav class="navbar navbar-default bootsnav">
        <div class="container">
            <div class="attr-nav navRig">
                <ul>
                    <!-- <li><a class="language" href="en/index.htm">EN</a></li> -->
                </ul>
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a href="?m=index&a=index" id="ctl00_Logo" class="navbar-brand logo">
                	<img src="{WEBSITE_SOURCE_URL}/img/home/logo.png" class='img-responsive'/>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul id="ctl00_MainMenu" class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <!-- <li id="nav1" class="active"> -->
                    <li id="nav1" class="{events}">
                        <!-- <a href="?m=events&a=index" target="_self"> -->
                    	<a href="http://www.chconsultant.com/zh/events" target="_blank">
                    		<h3>品牌会议</h3><i></i><!-- <span>HOME</span> -->
                    	</a>
                    </li>
                    <li id="nav2" data-toggle="modal" data-target="#myModal">
                    	<a href="javascript:;" target="_self">
                    		<h3>产业联盟</h3><i></i><!-- <span>ABOUT</span> -->
                    	</a>
                    </li>
                    <li id="nav3" data-toggle="modal" data-target="#myModal">
                    	<a href="javascript:;" target="_self">
                    		<h3>精准投行</h3><i></i><!-- <span>TEAM</span> -->
                    	</a>
                    </li>
                    <li id="nav4" class="dropdown" data-toggle="modal" data-target="#myModal">
                    	<a href="javascript:;" target="_self" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    		<h3 style="display:inline;">咨询服务</h3><!-- <i></i> --><!-- <span>NEWS</span> -->
                    	</a>
                        <ul class="dropdown-menu" style="min-width: 109px;margin-right: 11px;background:rgba(12, 29, 57, 0.5);color:#ffffff;border:0px solid #e0e0e0;border-top: solid 0px;opacity: 0.5;display:none;padding-left: 10px;" id="nav-new">
                            <li><a href="javascript:;" id="nav-new-single1"><h3 class="text-left">精准人才</h3></a></li>
                            <li><a href="javascript:;" id="nav-new-single2"><h3 class="text-left">产品注册</h3></a></li>
                            <li><a href="javascript:;" id="nav-new-single3"><h3 class="text-left">园区规划</h3></a></li>
                        </ul>
                    </li>
                    <li id="nav5" data-toggle="modal" data-target="#myModal">
                    	<a href="javascript:;" target="_self">
                    		<h3>医疗传媒</h3><i></i><!-- <span>JOIN US</span> -->
                    	</a>
                	</li>
                    <li id="nav6" data-toggle="modal" data-target="#myModal">
                    	<a href="javascript:;" target="_self">
                    		<h3>关于我们</h3><i></i><!-- <span>CONTACT</span> -->
                    	</a>
                    </li>
            	</ul>
            </div>
        </div>
    </nav>
</header>    
<div class="clearfix"></div>

<script>
    //监听打开对话框时让父窗口左移17px
$(function () { $('#myModal').on('show.bs.modal', function () {
    // body.style.paddingRight = "17px";
    // console.log($('body').attr('style'));
    // $('body').attr('style', 'padding-right: -100px;');
})

});   

//监听关闭对话框时让父窗口还原
$(function () { $('#myModal').on('hidden.bs.modal', function () {
        setTimeout(function(){
            $('body').attr('style', 'padding-right: -20px;');
        }, 400);
    })
});
</script>
