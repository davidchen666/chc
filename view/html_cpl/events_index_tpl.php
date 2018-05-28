<!DOCTYPE html>
<html lang="zh">
<head>
    <title><?php
echo $_obj['title'];
?>
</title>
	<meta charset=utf-8"UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />
	<meta name="renderer" content="webkit|ie-comp|ie-stand" />
	<meta name="author" content="lichen,1000zhu.com" />
    
	<link href="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/fonts/FontAwesome/font-awesome.css" rel="stylesheet" />
	<link href="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/css/animate.css" rel="stylesheet" />
	<link href="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/css/bootsnav.css" rel="stylesheet" />
	<link href="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/plugin/swiper3/css/swiper.min.css" rel="stylesheet" />
	<link href="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/css/style.css" rel="stylesheet" />  
    
    <script src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/js/lib/vendor/jquery.1.9.1.min.js"></script>
    <script src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/js/prefixfree.min.js"></script>
	<script src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/js/bootstrap.min.js"></script>
	<script src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/js/bootsnav.js"></script>
    <script src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/plugin/swiper3/js/swiper.min.js"></script>
    <script src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/plugin/swiper3/js/swiper.animate1.0.2.min.js"></script>
    <script src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/js/public.js"></script>
    <script src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/js/wow.min.js"></script>

    <script src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/js/lib/vendor/jquery.uploadify.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/css/uploadify.css">

    <script src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/js/lib/vendor/jquery.uploadfile.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/css/uploadfile.css">
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
	  <script src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/js/html5shiv.min.js"></script>
	  <script src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/js/respond.min.js"></script>
	<![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/css/slit-slider.css" />
    <script type="text/javascript" src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/js/jquery.ba-cond.min.js"></script>
	<script type="text/javascript" src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/js/jquery.slitslider.js"></script>
	<script type="text/javascript" src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/js/banner.js"></script>
	<meta name="keywords" content="CHC" />
    <meta name="description" content="CHC" />
    <!-- <link href="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/logo.png" rel="shortcut icon" /> -->
    <link rel="stylesheet" href="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/css/home.css">
    <link rel="stylesheet" href="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/css/events.css">
    <link rel="stylesheet" href="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/css/alliance.css">
	<link rel="stylesheet" href="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/css/banking.css">
    <script>

        //====================================== 公共 函数 ===========================================
        var loadingArr = [];
        //检查路由参数是否合法
        var getQueryString = function(name){
             var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
             var r = window.location.search.substr(1).match(reg);
             if(r!=null){
                return  unescape(r[2]);
             }else{
                return null;
             }
        }

        //将 \n换行 替换成 p标签
        var getNewStr = function(str){
            if(!str){
                return '<p></p>';
            }
            if(str.indexOf('\n') < 0){
                return '<p>' + str + '</p>';
            }
            var arrData = str.split("\n");
            if(arrData.length > 0){
                $.each(arrData, function(index, val) {
                     arrData[index] = '<p>' + val + '</p>';
                });
                return arrData.join(" ");
            }else{
                return '';
            }
        }

        //展示loading
        var showLoading = function(){
            $.each(loadingArr, function(index, val) {
                 $(val).html('<img class="img-responsive center-block" style="padding-top:80px;padding-bottom:350px;" src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/detail/loading.gif" alt="">');
            });
        }

        //关闭loading
        var closeLoading = function(){
            $.each(loadingArr, function(index, val) {
                 $(val).html('');
            });
        }

        //过滤html标签
        function delHtmlTag(str){
            return str.replace(/<[^>]+>/g,"");//去掉所有的html标记
        }

        //sleep
        var sleep = function (numberMillis) {    
            var now = new Date();    
            var exitTime = now.getTime() + numberMillis;   
            while (true) { 
            now = new Date();       
            if (now.getTime() > exitTime) 
                return;    
            } 
        }
    </script>
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
                	<img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/logo.png" class='img-responsive'/>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul id="ctl00_MainMenu" class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <!-- <li id="nav1" class="active"> -->
                    <li id="nav1" class="<?php
echo $_obj['events'];
?>
">
                        <!-- <a href="javascript:;" target="_self"> -->
                        <a href="?m=events&a=index" target="_self">
                    	<!-- <a href="http://www.chconsultant.com/zh/events" target="_blank"> -->
                    		<h3>品牌会议</h3><i></i><!-- <span>HOME</span> -->
                    	</a>
                    </li>
                    <li id="nav2" data-toggle="modal" data-target="#myModal" class="<?php
echo $_obj['alliance'];
?>
">
                    	<a href="javascript:;" target="_self">
                    		<h3>产业联盟</h3><i></i><!-- <span>ABOUT</span> -->
                    	</a>
                    </li>
                    <li id="nav3" data-toggle="modal" data-target="#myModal" class="<?php
echo $_obj['banking'];
?>
">
                    	<a href="javascript:;" target="_self">
                    		<h3>精准投行</h3><i></i><!-- <span>TEAM</span> -->
                    	</a>
                    </li>
                    <li id="nav4" class="dropdown" data-toggle="modal" data-target="#myModal" class="<?php
echo $_obj['services'];
?>
">
                    	<a href="javascript:;" target="_self" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    		<h3 style="display:inline;">咨询服务</h3><!-- <i></i> --><!-- <span>NEWS</span> -->
                    	</a>
                        <ul class="dropdown-menu" style="min-width: 109px;margin-right: 11px;background:rgba(12, 29, 57, 0.5);color:#ffffff;border:0px solid #e0e0e0;border-top: solid 0px;opacity: 0.5;display:none;padding-left: 10px;" id="nav-new">
                            <li><a href="javascript:;" id="nav-new-single1"><h3 class="text-left">精准人才</h3></a></li>
                            <li><a href="javascript:;" id="nav-new-single2"><h3 class="text-left">产品注册</h3></a></li>
                            <li><a href="javascript:;" id="nav-new-single3"><h3 class="text-left">园区规划</h3></a></li>
                        </ul>
                    </li>
                    <li id="nav5" data-toggle="modal" data-target="#myModal" class="<?php
echo $_obj['media'];
?>
">
                    	<a href="javascript:;" target="_self">
                    		<h3>医疗传媒</h3><i></i><!-- <span>JOIN US</span> -->
                    	</a>
                	</li>
                    <li id="nav6" data-toggle="modal" data-target="#myModal" class="<?php
echo $_obj['about'];
?>
">
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

<div class="headSpace"></div>
<div class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="banBg imgFull"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/banner-00.png" class="img-responsive"></div>
                <div class="slide-caption ">
                    <div class="caption-content">
                        <div class="banImg ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s" swiper-animate-delay="0.3s">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banDot">
        <div class="container">
            <!-- <span class="swiper-pagination"></span> -->
        </div>
    </div>
    <div class="banBtn"></div>
    <!-- <div class="banBtn-new">
        <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/down-btn.png" alt="">
    </div> -->
</div>

<div class="box1Bg" id="events-bg">
	<div class="container">
        <div class="box1Top wow fadeInUp" data-wow-delay="0.5s">
        	<img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/coming-title.png" class="img-responsive">
    	</div>
        <ul class="box1Cen list-unstyled list-inline text-center" id="big-show">
            <li class="wow fadeInUp">
                <div class="single" class="text-left">
                    <div class="add-shadow"><a href="http://www.chconsultant.com/zh/summit/ivd2018" target="_blank"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/pic_0510.png" class="img-responsive"></a></div>
                    <div class="two-show left-show" class="text-left">
                        <p class="text-left">第五届中国IVD产业投资与并购CEO论坛</p>
                        <p class="text-left">时间：2018年6月28-29日 &nbsp;&nbsp;  地点：上海</p>
                    </div>
                    <div class="two-show right-show"><a href="http://www.chconsultant.com/zh/summit/ivd2018/apply-register" target="_blank"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/record-2.png" alt=""></a></div>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li class="wow fadeInUp">
                <div class="single" class="text-left">
                    <div class="add-shadow"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/pic3.png" class="img-responsive"></div>
                    <div class="two-show left-show" class="text-left">
                        <p class="text-left">第五届中国心血管健康产业投资与并购CEO论坛</p>
                        <p class="text-left">时间：2018年9月 &nbsp;  地点：天津生态城世茂希尔顿酒店</p>
                    </div>
                    <div class="two-show right-show"><a href="http://www.chconsultant.com/zh/summit/ceo2018/apply-register" target="_blank"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/record-2.png" alt=""></a></div>
                    <div class="clearfix"></div>
                </div>
            </li>
        </ul>
        <div class="box1Top wow fadeInUp" data-wow-delay="0.5s">
            <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/events-back.png" class="img-responsive">
        </div>
        <ul class="box1Cen list-unstyled list-inline text-center">
        	<li class="wow fadeInUp">
                <a target="_blank" href="http://www.chconsultant.com/zh/summit/ceo2018/history">
                	<div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/icon-1-a.png" class="img-responsive"></div>
                	<p>医疗健康产业</p>
                </a>
            </li>
        	<li class="wow fadeInUp">
                <a target="_blank" href="http://www.chconsultant.com/zh/summit/ivd2018">
                	<div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/icon-2-a.png" class="img-responsive"></div>
                	<p>IVD及精准医疗</p>
                </a>
            </li>
        	<li class="wow fadeInUp">
                <a target="_blank" href="http://www.chconsultant.com/zh/summit/cdi2017/history">
                	<div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/icon-3-a.png" class="img-responsive"></div>
                	<p>心脑血管</p>
                </a>
            </li>
        	<li class="wow fadeInUp">
                <a target="_blank" href="http://www.chconsultant.com/zh/summit/czevent-2017/history">
                	<div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/icon-4-a.png" class="img-responsive"></div>
                	<p>骨科/生物材料</p>
                </a>
            </li>
            <li class="wow fadeInUp">
                <a target="_blank" href="http://www.chconsultant.com/zh/summit/mis2018/history">
                	<div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/icon-5-a.png" class="img-responsive"></div>
                	<p>微创外科</p>
                </a>
            </li>
            <li class="wow fadeInUp">
                <a target="_blank" href="http://www.chconsultant.com/zh/summit/mis2018/history">
                	<div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/icon-6-a.png" class="img-responsive"></div>
                	<p>医疗机器人</p>
                </a>
            </li>
        </ul>

<script>
    $('.box1Bg .box1Cen .img-responsive').hover(function(){
        var obj = $('.box1Bg .box1Cen .img-responsive');
        $.each(obj, function(index, val) {
            var defaultStr = $(this).attr('src').replace('b.png','a.png');
            val.src = defaultStr;
            var cObj = $(this).parent().next();
            cObj.attr('style', 'color:#ffffff');
        });
        var hoverStr = $(this).attr('src').replace('a.png','b.png');
        $(this).attr('src',hoverStr);
        var cObj_new = $(this).parent().next();
        cObj_new.attr('style', 'color:#9DC040');
    }, function() {
    })
</script>

        <!--战略伙伴-->
        <div class="box1Top wow" data-wow-delay="0.5s">
            <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/friends-title.png" class="img-responsive">
        </div>
        <ul class="box1Cen list-unstyled list-inline text-center" id="friends-show">
            <!-- <li class="wow">
                <a href="http://www.qimingvc.com/index.html" target="_blank">
                    <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/z-1.png" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <a href="http://www.legendcapital.com.cn" target="_blank">
                    <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/z-2.jpg" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <a href="http://www.cowincapital.com.cn" target="_blank">
                    <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/z-3.jpg" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/z-4.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/z-5.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/z-6.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/z-7.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/z-8.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/z-9.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <a href="http://www.highlightcapital.com" target="_blank">
                    <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/z-10.jpg" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/z-11.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/z-12.jpg" class="img-responsive"></div>
            </li> -->
            <li class="wow">
                <a href="http://www.qimingvc.com/index.html" target="_blank">
                    <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/logo/may-1.png" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <a href="http://www.legendcapital.com.cn" target="_blank">
                    <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/logo/may-2.png" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <a href="http://www.cowincapital.com.cn" target="_blank">
                    <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/logo/may-3.png" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <a href="http://www.highlightcapital.com" target="_blank">
                    <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/logo/may-4.png" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <a href="http://www.lyfecapital.com" target="_blank">
                    <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/logo/may-5.jpg" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <a href="http://www.medtronic.com/cn-zh/index.html" target="_blank">
                    <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/logo/may-6.png" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <a href="http://www.szgig.com" target="_blank">
                    <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/logo/may-7.jpg" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <a href="http://www.sunlandfund.com" target="_blank">
                    <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/logo/may-8.jpg" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <a href="http://www.wsgr.com" target="_blank">
                    <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/logo/may-9.jpg" class="img-responsive"></div>
                </a>
            </li>
        </ul>
        <!--媒体-->
        <div class="box1Top wow" data-wow-delay="0.5s">
            <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/media-title.png" class="img-responsive">
        </div>
        <ul class="box1Cen list-unstyled list-inline text-center" id="friends-show">
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/media-1.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/media-2.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/media-3.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/media-4.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/media-5.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/media-6.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/media-7.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/media-8.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/media-9.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/media-10.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/media-11.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/media-12.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/media-13.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/media-14.png" class="img-responsive"></div>
            </li>
        </ul>

        <!-- last -->
        <div id="bottom-show">
            <div class="box1Cen box1CenCon">
                <div class="wow list-unstyled list-inline text-center bg-up">
                    <div class="bg-up-inner">
                        <div class="small-top text-left"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/green-logo.png"></div>
                        <div class="inner-box-up"></div>
                    </div>
                </div>
                <div class="wow list-unstyled list-inline text-center bg-down">
                    <div class="bg-down-inner">
                        <div class="inner-box-down">
                            <div class="detail-intro text-left">
                                <p>为了促进医疗健康行业的发展，也为关注及从事医疗健康产业的企业、机构、园区等提供更过的增值服务，我们每年举办多场医疗健康产业发展与投资并购的高峰论坛。</p>
                            <p>始终聚焦并关注最具潜力的细分领域，如IVD及精准医疗、心脑血管及神经介入、骨科及生物材料、微创外科及手术机器人、智能医疗、口腔及齿科等、高度链接产业界、学术界、资本界，并以医疗企业高管、投资机构合伙人、医院及研发机构专家为主要参会人群。CHC医疗健康系列峰会已成为行业标杆论坛，是中国的 JP Morgan 医健大会。</p>
                            </div>
                            <ul class="box1Cen list-unstyled list-inline text-center" id="detail-list">
                                <li class="wow">
                                    <div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/icon1.png" class="img-responsive"></div>
                                    <p>搭建企业高层商务交流平台</p>
                                </li>
                                <li class="wow">
                                    <div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/icon2.png" class="img-responsive"></div>
                                    <p>产业投资与并购项目合作</p>
                                </li>
                                <li class="wow">
                                    <div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/icon3.png" class="img-responsive"></div>
                                    <p>企业品牌展示与推广</p>
                                </li>
                                <li class="wow">
                                    <div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/icon4.png" class="img-responsive"></div>
                                    <p>结交行业顶尖专家</p>
                                </li>
                                <li class="wow">
                                    <div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/icon5.png" class="img-responsive"></div>
                                    <p>了解最新行业趋势前沿技术</p>
                                </li>
                            </ul>
                            <div id="detail-contact">
                                >>>>>> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/icon-phone.png" alt=""> 021-68581087 
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/icon-mail.png" alt=""> registration@chconsultant.com
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 &lt;&lt;&lt;&lt;&lt;&lt; 
                            </div>
                            <!--<ul class="box1Cen list-unstyled list-inline text-center" id="detail-contact">
                                <li class="wow">
                                    <p>&gt;&gt;&gt;&gt;&gt;&gt;</p>
                                </li>
                                <li class="wow">
                                    <p><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/icon-phone.png">021-68581087</p>
                                </li>
                                <li class="wow" width="40%">
                                    <p><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/icon-mail.png">registration@chconsultant.com</p>
                                </li>
                                <li class="wow">
                                    <p> &lt;&lt;&lt;&lt;&lt;&lt; </p>
                                </li>
                                
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

<script>
    //立刻报名hover事件
    // $('.right-show').hover(function() {
    //     $(this).children('a').children('img').attr('src', '<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/record-2.png');
    // }, function() {
    //     $(this).children('a').children('img').attr('src', '<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/record-1.png');
    // });


    //加载ing
    // loadingArr = ['#big-show'];
    // showLoading();

    $(function(){
        var getLastEvents = function(){
            $.ajax({
                url: '?m=events&a=getLastEvents',
                success: function(ret){
                    var res = $.parseJSON(ret);
                    console.log(res);
                    var allStr = '';
                    if(res.resCode === 200){
                        if(res.resData && res.resData.length){
                            $.each(res.resData, function(index, val) {
                                 allStr += '<li class="wow fadeInUp"><div class="single" class="text-left"><div class="add-shadow"><a href="?m=events&a=detail&events_id=' + val.events_id + '" target="_blank"><img src="<?php
echo $_obj['imgPath'];
?>
/events/' + val.past_pic + '" class="img-responsive"></a></div><div class="two-show left-show" class="text-left"><p class="text-left">' + val.events_name + '</p><p class="text-left">时间：' + val.events_begin_date + ' &nbsp;&nbsp;  地点：上海</p></div><div class="two-show right-show"><a href="?m=events&a=mSignUp&events_id='+ val.events_id +'" target="_blank"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/record-2.png" alt=""></a></div><div class="clearfix"></div></div></li>';
                            });
                        }
                    }
                    $('#big-show').html(allStr);
                }
            })
            
        }
        // getLastEvents();
    })
</script>
<footer class="footerBg">
    <div class="footTop">
    	<div class="container">
        	<!-- <div id="ctl00_footLogo" class="footLogo"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/logo.png" class='img-responsive'/></div>
    		<div class="footCon">
            	<h3>电话</h3>
                <p>021-50726900 </p>
            </div>
            <div class="footCon">
            	<h3>邮箱</h3>
                <p>info@chconsultant.com</p>
            </div>
            <div class="footShare">
            	<h3>关注CHC</h3>
                <ul class="share list-unstyled list-inline">
                    <li>
                        <a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/images/footIco1.png" class="img-responsive" alt="新浪"></a>
                        <div class="shareWx">
                        	<img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/wechat.png" class="img-responsive" alt="关注我们">
                        </div>
                    </li>
                    <li>
                        <a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/images/footIco2.png" class="img-responsive" alt="微信"></a>
                        <div class="shareWx"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/weibo.png" class="img-responsive" alt="关注我们"></div>
                    </li>
                </ul>
            </div> -->
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-6 left-border">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs">
                                <li id="btn_remove"><a href="javascript:;">品牌会议</a></li>
                                <li><a href="javascript:;">产品联盟</a></li>
                                <li><a href="javascript:;">精品投行</a></li>
                                <li><a href="javascript:;">咨询服务</a></li>
                                <li><a href="javascript:;">医疗传媒</a></li>
                                <li><a href="javascript:;">关于我们</a></li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <h6>
                                <strong> 电话：</strong>021-50726900 &nbsp;&nbsp;&nbsp;&nbsp;
                                <strong> 邮箱：</strong><a href="mailto:info@chconsultant.com">info@chconsultant.com</a>
                            </h6>
                            <h6>版权所有  &copy;CHC Corporation 2013-2018.All right reserved.&nbsp;&nbsp;&nbsp;&nbsp;沪ICP备14003167号</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-5 col-sm-3 text-center">
                            <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/wechat.png" width="78px" alt="">
                            <p>微信公众号</p>
                        </div>
                        <!-- <div class="col-md-1"></div> -->
                        <div class="col-md-4 col-sm-3 text-center">
                            <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/weibo.png" width="78px" alt="">
                            <p>新浪微博</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</footer>

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background: rgba(255,255,255, 1);margin:0px auto;width:60%;">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h5 class="modal-title" id="myModalLabel" style="color:black;">
                    提示：
                </h5>
            </div>
            <div class="modal-body" style="color:black;font-family: SimSun;">
                <h4 style="font-size:12px;font-family: SimSun;">网站建设中，更多内容即将上线，敬请期待。</h4>
                <h4 style="font-size:12px;font-family: calibri;">Our website is under construction in order to add more content. <br>Please look forward to it...</h4>
            </div> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size:12px;font-family: SimSun;">知道了
                </button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<script language="javascript" type="text/javascript" src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/js/qz.ad.floating.js"></script>
<script language="javascript" type="text/javascript" src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/js/qz.ad.popup.js"></script>
<script language="javascript" type="text/javascript" src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/js/qz.ad.screen.js"></script>
<script src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/js/slick.min.js"></script> 
    <script type="text/javascript">
        $(document).ready(function () {
            // $(".nav li").eq(0).addClass("active");
            $(".headSpace").remove();
            $(".headerBg").removeClass("active2");
            // $('#nav1 h3').css('color', 'yellow');
        });
// $p.com.dialog("#btn_remove", {
//     title: "提示",
//     body: "你确定要删除吗？",
//     submit: function(modal, data, params, callback) {
//         $p.com.alert("你点击了确定");
//         modal.hide();
//     }
// });
    
    $(document).on("click",".dropdown-toggle",function(){
        alert(111);
        if( $(window).width() > 767 )
        if($(this).attr('href')) window.location = $(this).attr('href');
    });
</script>
</body>
</html>