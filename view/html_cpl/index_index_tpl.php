<!DOCTYPE html>
<html lang="zh">
<head>
    <title>CHC医疗咨询</title>
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

        //将换行变成p标签
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
                 $(val).html('<img class="img-responsive center-block" src="<?php
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


<div class="headSpace"></div>
<div class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="banBg imgFull"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/big-banner-new.png" class="img-responsive"></div>
                <div class="slide-caption ">
                    <div class="caption-content">
                        <div class="banImg ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s" swiper-animate-delay="0.3s">
                        	<!-- <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/upload/image/201709/01/0759452902.png" 
                        	class="img-responsive"> -->
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
    <!-- <div class="banBtn"></div> -->
    <!-- <div class="banBtn-new">
        <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/down-btn.png" alt="">
    </div> -->
</div>
<div class="box1Bg">
	<div class="container">
        <div class="box1Top wow fadeInUp" data-wow-delay="0.5s">
        	<!-- <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/upload/image/201711/22/0237043191.jpg" class="img-responsive"> -->
        	<img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/events-title.png" class="img-responsive">
    	</div>
        <ul class="box1Cen list-unstyled list-inline text-center">
        	<li class="wow fadeInUp">
            	<div class="box1CenCon"><a href="http://www.chconsultant.com/zh/summit/ceo2018" target="_blank"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/icon-1-a.png" class="img-responsive"></a></div>
            	<p>医疗健康</p>
            </li>
        	<li class="wow fadeInUp">
            	<div class="box1CenCon"><a href="http://www.chconsultant.com/zh/summit/IVD2017" target="_blank"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/icon-2-a.png" class="img-responsive"></a></div>
            	<p>IVD/精准医疗</p>
            </li>
        	<li class="wow fadeInUp">
            	<div class="box1CenCon"><a href="http://www.chconsultant.com/zh/summit/CDI2017" target="_blank"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/icon-3-a.png" class="img-responsive"></a></div>
            	<p>心脑血管</p>
            </li>
        	<li class="wow fadeInUp">
            	<div class="box1CenCon"><a href="http://www.chconsultant.com/zh/summit/czevent-2017" target="_blank"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/icon-4-a.png" class="img-responsive"></a></div>
            	<p>骨科/生物材料</p>
            </li>
            <li class="wow fadeInUp">
            	<div class="box1CenCon"><a href="http://www.chconsultant.com/zh/summit/mis2018" target="_blank"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/icon-5-a.png" class="img-responsive"></a></div>
            	<p>微创外科</p>
            </li>
            <li class="wow fadeInUp">
            	<div class="box1CenCon"><a href="http://www.chconsultant.com/zh/summit/mis2018" target="_blank"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/icon-6-a.png" class="img-responsive"></a></div>
            	<p>医疗机器人</p>
            </li>
        </ul>
        <div class="box1Bot text-center wow fadeInUp">
        	<!-- <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/default/upload/image/201708/07/0515513976.png" class="img-responsive"> -->
        	<p>聚焦于医疗健康产业，始终锁定与关注最具潜力的细分领域，每年举办多场产业高峰论坛，</p>
			<p>高度链接产业界、学术界、资本界、并以医疗企业高管、投资机构合伙人、医院及研发机构专家为主要参会人群。</p>
			<p>CHC医疗健康系列峰会已成为行业标杆论坛，是中国的JP Morgan医健大会。</p>
   		</div>
   		<div class="box1Bot text-center wow fadeInUp">
            <a href="http://www.chconsultant.com/zh/events" target="_blank">
                <button type="button" class="btn btn-default">了解更多</button>
            </a>
   			<!-- <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/get-more.png" class="img-responsive"> -->
   		</div>
	</div>
</div>
<script>
    $('.box1Bg .box1Cen .img-responsive').hover(function(){
        var obj = $('.box1Bg .box1Cen .img-responsive');
        $.each(obj, function(index, val) {
            var defaultStr = $(this).attr('src').replace('b.png','a.png');
            val.src = defaultStr;
            var cObj = $(this).parent().parent().next();
            cObj.attr('style', 'color:#ffffff');
        });
        var hoverStr = $(this).attr('src').replace('a.png','b.png');
        $(this).attr('src',hoverStr);
        var cObj_new = $(this).parent().parent().next();
        cObj_new.attr('style', 'color:#9DC040');
    }, function() {
    })
</script>
<!--
<div class="box2Bg">
	<div class="container">
    	<div class="box2Tit wow fadeInUp">
    		<img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/high-hunter-title.png" class="img-responsive" alt="高端猎头">
    	</div>
        <ul class="list-unstyled list-inline text-center">
            <li class="wow fadeInUp">
            	<div class="box2Img-new" class="text-center"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/pic-1.png" class="img-responsive"></div>
            	<div>
            		<h5 class="text-center">软件工程师(医疗器械行业)</h5>
		      		<h6>SOFTWARE ENGINEER</h6>
		      		<h6 class="text-left detail-list">
		      			<p>1、软件工程师(医疗器械行业)软件工程师(医疗器械行业)的哈哈哈哈哈啊哈</p>
		      			<p>2、软件工程师(医疗器械行业)软件工程师(医疗器械行业)</p>
		      			<p>3、软件工程师(医疗器械行业)软件工程师(医疗器械行业)的哈哈哈哈哈啊哈</p>
		      		</h6>
            	</div>
            	<div class="box1Bot text-center wow fadeInUp">
                    <button type="button" class="btn btn-default">了解更多</button>
		   		</div>
        	</li>
        	<li class="wow fadeInUp">
            	<div class="box2Img-new"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/pic-2.png" class="img-responsive"></div>
            	<div>
            		<h5>软件工程师(医疗器械行业)</h5>
		      		<h6>SOFTWARE ENGINEER</h6>
		      		<h6 class="text-left detail-list">
		      			<p>1、软件工程师(医疗器械行业)软件工程师(医疗器械行业)的哈哈哈哈哈啊哈</p>
		      			<p>2、软件工程师(医疗器械行业)软件工程师(医疗器械行业)</p>
		      			<p>3、软件工程师(医疗器械行业)软件工程师(医疗器械行业)的哈哈哈哈哈啊哈</p>
		      		</h6>
            	</div>
            	<div class="box1Bot text-center wow fadeInUp">
                    <button type="button" class="btn btn-default">了解更多</button>
		   		</div>
        	</li>
        	<li class="wow fadeInUp">
            	<div class="box2Img-new"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/pic-3.png" class="img-responsive"></div>
            	<div>
            		<h5>软件工程师(医疗器械行业)</h5>
		      		<h6>SOFTWARE ENGINEER</h6>
		      		<h6 class="text-left detail-list">
		      			<p>1、软件工程师(医疗器械行业)软件工程师(医疗器械行业)的哈哈哈哈哈啊哈</p>
		      			<p>2、软件工程师(医疗器械行业)软件工程师(医疗器械行业)</p>
		      			<p>3、软件工程师(医疗器械行业)软件工程师(医疗器械行业)的哈哈哈哈哈啊哈</p>
		      		</h6>
            	</div>
            	<div class="box1Bot text-center wow fadeInUp">
                    <button type="button" class="btn btn-default">了解更多</button>
		   		</div>
        	</li>
        </ul>
    </div>
</div>
-->
<div class="box3Bg">
    <div class="box3OverLay">
        <div class="container">
            <div class="box2Tit wow fadeInUp"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/jingpin-title.png" class="img-responsive"></div>
            <div class="box3Item wow fadeInUp">
                <div class="box1Bot text-center wow fadeInUp">
                    <button type="button" class="btn btn-default">了解更多</button>
		   		</div>
            </div>
        </div>
    </div>
</div>
    
<div class="box2Bg">
    <div class="container">
        <div class="box2Tit wow fadeInUp">
            <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/jinzhunrencai-title.png" class="img-responsive" alt="精准人才">
        </div>
        <ul class="list-unstyled list-inline text-center" id="high-people">
            <li class="wow fadeInUp">
                <div class="single-show border-bottom">
                    <div class="img-head" class="text-center"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/1-0.png" class="img-responsive hover-1"></div>
                    <div class="box1Bot text-center wow fadeInUp">
                        <button type="button" class="btn btn-primary btn-sm">行业人脉</button>
                    </div>
                    <div>
                        <p>来自医疗器械行业的多位资深合伙人，50%的员工具有微创、美敦力、巴德等国内外知名医疗公司从业经验，行业内人员地图式“检索”、专业度甚至是职业口碑的洞察。</p>
                    </div>
                </div>
                <div class="single-show">
                    <div class="img-head" class="text-center"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/3-0.png" class="img-responsive hover-3"></div>
                    <div class="box1Bot text-center wow fadeInUp">
                        <button type="button" class="btn btn-primary btn-sm">同为医疗人,你的渴求我们解决</button>
                    </div>
                    <div>
                        <p>带着从医疗领域一路走来的历练，我们愿意帮您贴心解决企业根本——“人“的各方面问题。</p>
                    </div>
                </div>
            </li>
            <li class="wow fadeInUp middle-bg">
                <div class="middle-show box1Bot" style="display:none;">
                    <div class="single-img-middle">
                        <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/circle.png" alt="">
                    </div>
                </div>
            </li>
            <li class="wow fadeInUp">
                <div class="single-show border-bottom">
                    <div class="img-head" class="text-center"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/2-0.png" class="img-responsive hover-2"></div>
                    <div class="box1Bot text-center wow fadeInUp">
                        <button type="button" class="btn btn-primary btn-sm">专业的顾问团队</button>
                    </div>
                    <div>
                        <p>团队成员由管理学博士/国家注册心理咨询师/企业私董会教练组成，10年以上大型医疗上市公司资深人力资源管理经验。</p>
                    </div>
                </div>
                <div class="single-show">
                    <div class="img-head" class="text-center"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/home/4-0.png" class="img-responsive hover-4"></div>
                    <div class="box1Bot text-center wow fadeInUp">
                        <button type="button" class="btn btn-primary btn-sm">多年品牌会议积累</button>
                    </div>
                    <div>
                        <p>CHC行业内标杆会议，1000+跨国巨头，上市公司，本土潜力公司尽数在握，高端人才资源丰富多样。</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<script>
    //hover效果
    $('#high-people .single-show').hover(function(){
        var objNew = $('.single-show .img-responsive');
        $.each(objNew, function(index, val) {
            var defaultStr = $(this).attr('src').replace('-1.png','-0.png');
            val.src = defaultStr;
        });
        var hoverStr = $(this).children('div').children('img').attr('src').replace('-0.png','-1.png');
        $(this).children('div').children('img').attr('src',hoverStr);
        $('.single-show button').attr('class', 'btn btn-primary btn-sm');
        $(this).children('div').eq(1).children('button').attr('class', 'btn btn-warning btn-sm');
    }, function() {
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