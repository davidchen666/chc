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
/img/alliance/banner-00.png" class="img-responsive"></div>
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

<div class="box1Bg box1Cen" id="alliance-bg">
	<div class="container ">
        <div class="box1Top wow fadeInUp" data-wow-delay="0.5s">
        	<img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/about-alliance.png" class="img-responsive">
    	</div>
        <div class="about-alliance ">
        	<div class='left-t'>
        		<div class="img-t">
        			<img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/pic.png" alt="">
        		</div>
        		<div class="logo-t">
        			<div class="container">
			            <div class="row text-center">
			            	<p class="col-md-3 border-right-line">logo pic</p>
			            	<p class="col-md-4">2016年6月29日 &nbsp;&nbsp; IVD联盟成立仪式</p>
			            </div>
			            <div class="clear"></div>
			        </div>

        		</div>
        	</div>
        	<div class='right-t'>
                <p>
                    IVD及精准医疗产业与投资联盟（简称“IVD联盟”）是国内首个由行业巨头和投资大鳄联合创立产业联盟。与2016年6月29日正式成立，目前已有100多家会员单位。创始单位包括：华大基因、复星医药、雅培、罗氏诊断、启明创投、红杉中国基金、山蓝资本、万孚生物、美康生物、药明康德、Illu-mina、凯杰、生物梅里埃、阳普医疗、理邦仪器、誉衡药业、君联资本、达晨创投、软银中国、同创伟业、高特佳投资集分享投资、晨兴集团、弘晖资本、通合资本、中卫创投等近40家单位，首任理事长由华大基因执行总裁尹烨先生当选。
                </p>   
            </div>
        	<div class="clearfix"></div>
        </div>

        <!--begin 联盟成员-->
        <div class="box1Top wow" data-wow-delay="0.5s">
            <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/member-title.png" class="img-responsive">
        </div>
        <ul class="box1Cen list-unstyled list-inline text-center" id="friends-show">
            <li class="wow">
                <div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/ali.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/ali.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/ali.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/ali.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/ali.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/ali.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/ali.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/ali.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/ali.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/ali.png" class="img-responsive"></div>
            </li>
        </ul>
        <div class="btn-img text-center">
            <a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/learn-more.png" alt=""></a>
        </div>
        <!--end 联盟成员-->

        <!--end 联盟活动-->
        <div class="box1Top wow" data-wow-delay="0.5s">
            <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/alliance-active.png" class="img-responsive">
        </div>
        <ul class="box1Cen list-unstyled list-inline text-center" id="active-show">
            <li class="wow">
                <div class="box1CenCon"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/1.png" class="img-responsive"></a></div>
                <p>2017年10月14日 &nbsp;&nbsp;&nbsp;启明参访</p>
            </li>
            <li class="wow">
                <div class="box1CenCon"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/2.png" class="img-responsive"></a></div>
                <p>2017年10月14日 &nbsp;&nbsp;&nbsp;启明参访</p>
            </li>
            <li class="wow">
                <div class="box1CenCon"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/3.png" class="img-responsive"></a></div>
                <p>2017年10月14日 &nbsp;&nbsp;&nbsp;项目路演</p>
            </li>
        </ul>
        <!--end 联盟活动-->

        <!--begin 会员新闻-->
        <div class="box1Top wow" data-wow-delay="0.5s">
            <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/member-news-title.png" class="img-responsive">
        </div>
        <ul class="box1Cen list-unstyled list-inline text-center" id="member-news-show">
            <li class="wow">
                <div class="box1CenCon">
                    <div class="row">
                        <div class="col-md-4 left-show">
                            <div class="img-show text-left">
                                <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/new.png" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-8 right-show text-left">
                            <h4><b>医疗新领域</b></h4>
                            <p>2017-12-12 18:36:03</p>
                            <p>凭借专业精神和极致的服务，凭借专业精神和极致的服务，凭借专业精神和极致的服务，凭借专业精神和极致的服务</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="wow">
                <div class="box1CenCon">
                    <div class="row">
                        <div class="col-md-4 left-show">
                            <div class="img-show text-left">
                                <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/new.png" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-8 right-show text-left">
                            <h4><b>医疗新领域</b></h4>
                            <p>2017-12-12 18:36:03</p>
                            <p>凭借专业精神和极致的服务，凭借专业精神和极致的服务，凭借专业精神和极致的服务，凭借专业精神和极致的服务</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="clearfix"></div>
        <!--end 会员新闻-->

        <!--begin 入会资格流程-->
        <div class="box1Top wow" data-wow-delay="0.5s">
            <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/enter-alliance-title.png" class="img-responsive">
        </div>
        <div class="box1Cen enter-alliance">
            <div class="top-show">
                <div class="row">
                    <div class="col-md-8">
                        <h4>入会资格：</h4>
                        <p>1、测试多级京东卡荆防颗粒看及框架尽快尽快将借口借口。</p>
                        <p>2、测试多级京东卡荆防颗粒看。</p>
                    </div>
                    <div class="col-md-4">
                        <h4>联盟秘书处：</h4>
                        <p>电话：021-68581087</p>
                        <p>邮箱：ivd@chconsultant.com</p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12">
                        <h4>入会流程top：</h4>
                        <ol class="steps box1Cen list-unstyled list-inline text-center">
                            <li class="step-active">
                                <div class="step-line"></div>
                                <div class="step-content" id="first">
                                    <span class="step-num"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/1-small.png" class="img-responsive"></a></span>
                                    <div class="step-text title-show">联系联盟秘书处</div>
                                </div>
                            </li>
                            <li class="step-active">
                                <div class="step-line"></div>
                                <div class="step-content" id="second">
                                    <span class="step-num"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/2-small.png" class="img-responsive"></a></span>
                                    <div class="step-text title-show">填写入会申请表提交秘书处</div>
                                    <!-- <div class="step-text title-show">联系联盟秘书处</div> -->
                                </div>
                            </li>
                            <li class="step-active">
                                <div class="step-line"></div>
                                <div class="step-content" id="third">
                                    <span class="step-num"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/3-small.png" class="img-responsive"></a></span>
                                    <div class="step-text title-show">联盟理事会表决</div>
                                    <!-- <div class="step-text title-show">联系联盟秘书处</div> -->
                                </div>
                            </li>
                            <li class="step-active">
                                <div class="step-line"></div>
                                <div class="step-content" id="fourth">
                                    <span class="step-num"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/4-small.png" class="img-responsive"></a></span>
                                    <div class="step-text title-show">表发盖章回寄</div>
                                </div>
                            </li>
                            <li class="step-active">
                                <div class="step-line"></div>
                                <div class="step-content" id="fiveth">
                                    <span class="step-num"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/5-small.png" class="img-responsive"></a></span>
                                    <div class="step-text title-show">缴纳会费</div>
                                </div>
                            </li>
                            <li>
                                <div class="step-line"></div>
                                <div class="step-content" id="sixth">
                                    <span class="step-num"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/6-small.png" class="img-responsive"></a></span>
                                    <div class="step-text title-show">推荐高管加入联盟微信群</div>
                                    <!-- <div class="step-text title-show">联系联盟秘书处</div> -->
                                </div>
                            </li>
                            <li>
                                <div class="step-end"></div>
                                <div class="step-content" id="seventh">
                                    <span class="step-num"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/7-small.png" class="img-responsive"></a></span>
                                    <div class="step-text title-show">入会流程完毕</div>
                                </div>
                            </li>
                        </ol>
                        
                    </div>
                </div>
            </div>
            <!-- <ul class="box1Cen list-unstyled list-inline text-center" id="middle-show">
                <li class="wow">
                    <div class="hr-line"></div>
                    <div class="box1CenCon"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/1-small.png" class="img-responsive"></a></div>
                    <p>111</p>
                </li>
                <li class="wow">
                    <div class="box1CenCon"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/2-small.png" class="img-responsive"></a></div>
                    <p>222</p>
                </li>
                <li class="wow">
                    <div class="box1CenCon"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/3-small.png" class="img-responsive"></a></div>
                    <p>333</p>
                </li>
                <li class="wow">
                    <div class="box1CenCon"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/4-small.png" class="img-responsive"></a></div>
                    <p>444</p>
                </li>
                <li class="wow">
                    <div class="box1CenCon"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/5-small.png" class="img-responsive"></a></div>
                    <p>555</p>
                </li>
                <li class="wow">
                    <div class="box1CenCon"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/6-small.png" class="img-responsive"></a></div>
                    <p>666</p>
                </li>
                <li class="wow">
                    <div class="box1CenCon"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/7-small.png" class="img-responsive"></a></div>
                    <p>777</p>
                </li>
            </ul> -->
            <!-- <div id="middle-show" class="box1Cen">
                <div class="row">
                
                <h4>入会流程bottom：</h4>
                <ol class="steps box1Cen list-unstyled list-inline text-center">
                    <li class="step-active">
                        <div class="step-line"></div>
                        <div class="step-content">
                            <span class="step-num"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/1-small.png" class="img-responsive"></a></span>
                            <div class="step-text title-show">填写资料</div>
                        </div>
                    </li>
                    <li class="step-active">
                        <div class="step-line"></div>
                        <div class="step-content">
                            <span class="step-num"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/2-small.png" class="img-responsive"></a></span>
                            <div class="step-text title-show">审核填写信息</div>
                        </div>
                    </li>
                    <li class="step-active">
                        <div class="step-line"></div>
                        <div class="step-content">
                            <span class="step-num"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/3-small.png" class="img-responsive"></a></span>
                            <div class="step-text title-show">完成注册</div>
                        </div>
                    </li>
                    <li class="step-active">
                        <div class="step-line"></div>
                        <div class="step-content">
                            <span class="step-num"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/4-small.png" class="img-responsive"></a></span>
                            <div class="step-text title-show">完成注册</div>
                        </div>
                    </li>
                    <li class="step-active">
                        <div class="step-line"></div>
                        <div class="step-content">
                            <span class="step-num"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/5-small.png" class="img-responsive"></a></span>
                            <div class="step-text title-show">完成注册</div>
                        </div>
                    </li>
                    <li>
                        <div class="step-line"></div>
                        <div class="step-content">
                            <span class="step-num"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/6-small.png" class="img-responsive"></a></span>
                            <div class="step-text title-show">完成注册</div>
                        </div>
                    </li>
                    <li>
                        <div class="step-end"></div>
                        <div class="step-content">
                            <span class="step-num"><a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/7-small.png" class="img-responsive"></a></span>
                            <div class="step-text title-show">完成注册</div>
                        </div>
                    </li>
                </ol>
                </div>
            </div> -->
        </div>

        <!--end 入会资格流程-->
        <div class="visible-xs visible-sm">
            <div class="b-box"></div>
        </div>
        <div class="visible-md visible-lg">
            <div class="up-btn"></div>
        </div>
        <div class="btn-img text-center">
            <a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/alliance/enter-alliance.png" alt=""></a>
        </div>
	</div>
</div>

<script>
	$(function(){
		$('header').attr('class','headerBg navbar-fixed-top active');
	    // console.log($('header').attr('class'));
	    $(window).scroll(function(event) {
	    	// console.log($('header').attr('class'));
	    	$('header').attr('class','headerBg navbar-fixed-top active');
	    });
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