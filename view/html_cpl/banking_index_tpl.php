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
                <div class="banBg imgFull">
                    <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/banner-00.png" class="img-responsive">
                    <!-- <img src="<?php
echo $_obj['img_url'];
?>
" class="img-responsive"> -->
                </div>
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
        <!--begin 业务介绍 -->
        <div class="box1Top wow fadeInUp" data-wow-delay="0.5s">
            <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/sales-title.png" class="img-responsive">
        </div> 
        <div class="box1Cen">
            <div class="sales">
                <div class="my-pic">
                    <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/right-0.png" class="" width="100%" height="100%">
                </div> 
                <div class="my-intro">
                    <div class="intro-top text-center">
                        <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/english.png" alt="" width="90%" height="80%">
                    </div>
                    <div class="intro-bottom">
                        <p class="black"> CHC精品投行业务专注于为全球医疗健康行业的有商业模式及创新技术的企业提供全方位的财务顾问服务，涉及领域和成功案例包括医疗器械、生物医药及医疗服务的多个细分领域。我们为创业企业提供财务顾问、战略投资、发展规划、资源整合等咨询服务。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!--end 业务介绍 -->

        <!--begin 服务流程 -->
        <div class="box1Top wow fadeInUp banking-service" data-wow-delay="0.5s">
            <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/service-title.png" class="img-responsive">
            <div class="box1Cen">
                <div class="my-content">
                    <div class="my-left">
                        <a href="javascript:;" class="changeStep">
                            <div class="one">
                                <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/selected-1.png" alt="" class="img-responsive">
                                <span class="word-title-show text-center"> <span>01 </span> 初步接触</span>
                            </div>
                        </a>
                        <a href="javascript:;" class="changeStep">
                            <div class="two">
                                <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/origintal-2.png" alt="" class="img-responsive">
                                <span class="word-title-show text-center black"> <span>02 </span> 合同签订</span>
                            </div>
                        </a>
                        <a href="javascript:;" class="changeStep">
                            <div class="three">
                                <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/origintal-3.png" alt="" class="img-responsive">
                                <span class="word-title-show text-center"> <span>03 </span> 企业诊断</span>
                            </div>
                        </a>
                        <a href="javascript:;" class="changeStep">
                            <div class="four">
                                <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/origintal-4.png" alt="" class="img-responsive">
                                <span class="word-title-show text-center black"> <span>04 </span> 投资人见面会与投资深入对接</span>
                            </div>
                        </a>
                        <a href="javascript:;" class="changeStep">
                            <div class="five">
                                <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/origintal-5.png" alt="" class="img-responsive">
                                <span class="word-title-show text-center"> <span>05 </span> 落实投资</span>
                            </div>
                        </a>
                    </div>
                    <div class="my-right text-center">
                    	<img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/icon-one.png" alt="" class="img-responsive icon-show">
                    	<p></p>
                    </div>
                </div>
                
            </div>
            <div class="clearfix"></div>
        </div>
        <!--end 服务流程 -->

        <!--begin 合作机构-->
        <div class="box1Top wow" data-wow-delay="0.5s">
            <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/partner-title.png" class="img-responsive">
        </div>

        <ul class="box1Cen list-unstyled list-inline text-center" id="friends-show">
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/1.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/2.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/3.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/4.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/5.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/6.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/7.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/8.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/9.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/10.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/11.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/12.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/13.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/14.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/15.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/16.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/17.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/18.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/19.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/20.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/21.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/22.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/23.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/24.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/25.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/26.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/27.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/28.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/29.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/logo/30.png" class="img-responsive"></div>
            </li>
        </ul>
        <div class="btn-img text-center">
            <a href="###" data-target="#showRegister" data-toggle="modal"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/enter.png" alt=""></a>
        </div>
        <!--end 合作机构-->
    </div>
</div>

<!-- begin 模态窗口 -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="showRegisterModalLabel" id="showRegister" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12 text-center"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/upload-title.png" alt=""></div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
                <label for="name"><p>公司名称*</p></label>
                <input type="text" class="form-control com_name">
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name"><p>联系人姓名*</p></label>
                    <input type="text" class="form-control user_name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name"><p>职位*</p></label>
                    <input type="text" class="form-control user_job">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name"><p>电话/手机*</p></label>
                    <input type="text" class="form-control user_mobile">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name"><p>邮箱*</p></label>
                    <input type="text" class="form-control user_email">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-left">
                <!-- <p> -->
                    <b><small>上传商业计划书（仅支持PPT、PDF格式）</small></b>
                    <!-- <input id="uploadImage" type="file" name="photoimage" class="fimg1"/> -->
                    <!-- <a href="javascript:;" class="uploadFile"><input id="file_upload" name="file_upload" type="file" multiple="false">
                    </a> -->
                <!-- </p> -->
            </div>
            <div class="col-md-2 text-left">
                <!-- <div id="fileuploader"> -->
                    <!-- <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/enter.png" class="img-responsive" alt=""> -->
                    <a href="javascript:;" class="a-upload">
                        <input type="file" name="file1" id="file1" class="form-control doUpload" />
                        <!-- <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/enter.png" class="img-responsive" alt=""> -->
                        递交商业计划书 
                    </a>
                    <!-- <input type="button" value="上传" onclick="doUpload()" />   -->
                <!-- </div> -->
            </div>
            <div class="col-md-4 text-center">
            	<!-- <input type="button" value="上传" class=" doUpload"/> -->
                <span class="upload-msg" style="color:red;display: none;">上传中...</span>
                <span class="msg" style="color:red;display: none;"></span>
            </div>
        </div>
        <div class="row words">
            <div class="col-md-12">
                <p><small>1.  请真实填写以上信息，我们会对该信息保密，不会泄露给第三方或用于其他商业目的；</small></p>
                <p><small>2.  提交申请后，我们将在1-3个工作日内与您联系，请耐心等待；</small></p>
                <p><small>3.  相关问题请咨询：021-50726900，project@chconsultant.com。</small></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="javascript:;" title="" class="my-register">
                    <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/reg-btn.png" alt="">
                </a>
            </div>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- end  模态窗口 -->

<script>
$(function(){
//     $('header').attr('class','headerBg navbar-fixed-top active');
//     // console.log($('header').attr('class'));
//     $(window).scroll(function(event) {
//         // console.log($('header').attr('class'));
//         $('header').attr('class','headerBg navbar-fixed-top active');
//     });
	
	var showJson = {
		one: "了解客户的业务，行业背景，融资需求和其他各项要求；<br>了解客户基本情况，企业发展，股权结构，财务状况，了解项目和熟悉业务。",
		two: "签署保密协议/排他协议/财务顾问协议；<br>成立项目工作组，确认项目负责人。",
		three: "深入了解项目的行业背景，市场规模，分析对标企业；<br>根据业务特点，建立指标体系，帮助企业整理和制定中、长期财务战略规划；<br>讨论及拟定具体服务方案、制定工作计划、时间表；<br>帮助创业团队提升经营管理战略思路和决断能力；<br>完善和提升项目计划书。",
		four: "根据投资人行业喜好、投资阶段，针对性推荐，安排投资人见面会；<br>及时沟通，让投融双方在深入接触中，走近彼此，增进了解；<br>助力创业项目取得投资意向书；<br>帮助项目方在与投资人接触中，加深了解资本市场。",
		five: "协助投资人进行业务、法律、财务等尽职调查；<br>帮助创业企业发现、确定最契合发展愿景的投资人；<br>与投资人沟通，帮助项目方取得最合适企业长远发展的投资方案；<br>协助第三方专业机构完成投资工作流程：签署投资合同，敦促投资款到位。"
	};
	$('.my-right p').html(showJson.one);
   //change效果
   $('.changeStep').hover(function() {
   		$('.changeStep').children('div').css('width', '36.1%');
   		$('.one img').attr('src',"<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/origintal-1.png");
   		$('.two img').attr('src',"<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/origintal-2.png");
   		$('.three img').attr('src',"<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/origintal-3.png");
   		$('.four img').attr('src',"<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/origintal-4.png");
   		$('.five img').attr('src',"<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/origintal-5.png");

   		var currentStr = $(this).children('div').children('img').attr('src');
   		var currentClass = $(this).children('div').attr('class');
   	    $(this).children('div').children('img').attr('src', currentStr.replace('origintal', 'selected'));
   	    $(this).children('div').css('width', '37.28%');
   	    $('.icon-show').attr('src', "<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/icon-" + currentClass + ".png");
   	    // console.log(showJson[currentClass]);
   	    $('.my-content .my-right').attr('style',"background-image: url(<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/banking/bg-" + currentClass + ".png); ");
   	    $('.my-right p').html(showJson[currentClass]);
   	    
   }, function() {
   	/* Stuff to do when the mouse leaves the element */
   });

    var params = {
        file_name: '',
    }
    function doUpload() {
        var formData = new FormData();
        // formData.append("token", token);
        formData.append("file", $('#file1')[0].files[0]);
        // formData.append("file2", $('#file2')[0].files[0]);
        // formData.append("file3", $('#file3')[0].files[0]);
        $.ajax({  
             url: '?m=events&a=uploadFile' ,  
             type: 'post',  
             data: formData,
             cache: false,
             processData: false,
             contentType: false,
             // async: false
        }).done(function(res) {
            sleep(1000);
            $('.upload-msg').hide();
            $('.msg').show();
        	res = $.parseJSON(res);
            console.log(res);
            if(res.resCode === 200){
            	$('.msg').html('上传成功。');
                params.file_name = res.resData.newname;
            }else{
            	$('.msg').html('上传失败,<br>'+res.resData);
                params.file_name = '';
            }
            
        }).fail(function(res) {
            params.file_name = '';
        });
    }
    
    $('.doUpload').change(function(event) {
        $('.msg').hide();
        $('.upload-msg').show();
        doUpload();
    });

   //提交报名信息
   $('.my-register').click(function(event) {
    //id  com_name    user_name   user_job    user_mobile user_email  file_name   remark  create_date update_date
        //获取公司相关数据
        params.com_name = $('.com_name').val();
        params.user_name = $('.user_name').val();
        params.user_job = $('.user_job').val();
        params.user_mobile = $('.user_mobile').val();
        params.user_email = $('.user_email').val();
        //判断必填项是否填写
        if(!params.com_name){
            alert('公司名称不能为空。');
            return;
        }
        if(!params.user_name){
            alert('负责人姓名不能为空。');
            return;
        }
        if(!params.user_job){
            alert('负责人职位不能为空。');
            return;
        }
        if(!params.user_mobile){
            alert('负责人电话不能为空。');
            return;
        }
        if(!params.user_email){
            alert('负责人邮箱地址不能为空。');
            return;
        }
        if(!params.file_name){
            alert('请上传商业计划书。');
            return;
        }
        if(!confirm('确认提交以上信息吗？')){
            return;
        }
        // console.log('all',params,JSON.stringify(params));

        $.ajax({
            url: '?m=banking&a=addBankingSignUp',
            type: 'POST',
            data: params,
            dataType: 'json',
            success: function(res){
                console.log(res);
                if(res.resCode === 200){
                    if(res.resData.id){
                        $('#showRegister').modal('hide');
                        alert('恭喜你！报名成功！');
                        $('.com_name').val('');
                        $('.user_name').val('');
                        $('.user_job').val('');
                        $('.user_mobile').val('');
                        $('.user_email').val('');
                        params.file_name = '';
                        $('.msg').html('');
                    }else{
                        alert('信息提交失败');
                    }
                    
                    // $("#success").alert();
                }else{
                    alert('信息提交失败,' + res.resData);
                    // alert();
                    // $("#error").alert();
                }
            }
        })
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