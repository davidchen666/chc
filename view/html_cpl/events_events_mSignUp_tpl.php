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

<!-- 菜单 -->
<div class="detail-top">
	<div class="top-img" id="topimg">
		<div class="detail-menu">
			<div class="container">
				<ul class="box1Cen list-unstyled list-inline text-center" id="menu-show">
		            <li class="wow">
		            	<a class="child-menu" href="#" link="?m=events&a=detail"><div class="box1CenCon <?php
echo $_obj['detail'];
?>
"><p>首页</p></div></a>
		            </li>
		            <li class="wow">
		                <a class="child-menu" href="#" link="?m=events&a=about"><div class="box1CenCon <?php
echo $_obj['about'];
?>
"><p>关于会议</p></div></a>
		            </li>
		            <li class="wow">
		                <a class="child-menu" href="#" link="?m=events&a=schedule"><div class="box1CenCon <?php
echo $_obj['schedule'];
?>
"><p>会议日程</p></div></a>
		            </li>
		            <li class="wow">
		                <a class="child-menu" href="#" link="?m=events&a=speaker"><div class="box1CenCon <?php
echo $_obj['speaker'];
?>
"><p>演讲嘉宾</p></div></a>
		            </li>
		            <li class="wow">
		                <a class="child-menu" href="#" link="?m=events&a=hotel"><div class="box1CenCon <?php
echo $_obj['hotel'];
?>
"><p>会议酒店</p></div></a>
		            </li>
		            <li class="wow">
		                <a class="child-menu" href="#" link="?m=events&a=review"><div class="box1CenCon <?php
echo $_obj['review'];
?>
"><p>历届回顾</p></div></a>
		            </li>
		            <li class="wow bigger-menu-bg">
		                <a class="child-menu" href="#" link="?m=events&a=mSignUp"><div class="box1CenCon <?php
echo $_obj['mSignUp'];
?>
"><p><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/detail/events-record-icon.png"> 参会报名</p></div></a>
		            </li>
		            <li class="wow bigger-menu-bg">
		                <a class="child-menu" href="#" link="?m=events&a=rSignUp"><div class="box1CenCon <?php
echo $_obj['rSignUp'];
?>
"><p><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/detail/road-record-icon.png"> 路演报名</p></div></a>
		            </li>
		        </ul>
	        </div>
	        <div class="line-yellow"></div>
		</div>
	</div>
</div>

<script>
	$('.logo').hide();
	$(window).scrollTop(0);

	$(window).scroll(function(){//开始监听滚动条
        //获取当前滚动条高度
		var topp = $(document).scrollTop();
        //用于调试 弹出当前滚动条高度
        if(topp > 0){
        	$('header').hide();
        }else{
        	$('header').show();
        }
		// console.log($('header'));
		// console.log(topp);
		// if(topp > 374){
		if(topp > 467){
			$('.detail-menu').css('position','fixed');
			$('.detail-menu').css('top','0px');
		}else{
			$('.detail-menu').css('position', 'relative');
			$('.detail-menu').css('top','94%');
		}
		// var sMenu = $('.detail-menu').scrollTop();
		// console.log(sMenu)
	})

	//请求数据并渲染页面
	var getData = function(params){
		$.ajax({
			url: '?m=events&a=getEventsInfo',
			type: 'POST',
			data: params,
			success: function(res){
				res = $.parseJSON(res);
				console.log(res);
				closeLoading();
				if(res.resCode !== 200){
					// alert(res.resData);
					$('body').html('<h1 class="text-center" style="color:black;padding-top:100px;">HELLO ERROR: '+res.resData +'</h1>');
					return false;
				}else{
					showData(res.resData);
					$('#topimg').attr('style', 'background:url(<?php
echo $_obj['imgPath'];
?>
/events/' + res.resData.baseData.events_pic + ') center center no-repeat;background-size: cover;height: 500px;');
					if(localStorage.getItem(events_id) !== $('#topimg').attr('style')){
						//存储图片
						localStorage.setItem(events_id,$('#topimg').attr('style'));
					}
				}
			}
		})
	}
	
	var allowAction = ['detail','about','hotel','review','speaker','schedule','mSignUp','rSignUp'];
	var currentAction = getQueryString('a');
	var events_id = getQueryString('events_id');
	var params = {};
	if( !events_id || getQueryString('m') !== 'events' || allowAction.indexOf(currentAction) < 0 ){
		$('body').html('<h1 class="text-center" style="color:black;padding-top:100px;">HELLO ERROR: 您访问的地址不正确。请检查链接参数。</h1>');
		// alert('访问地址不正确！');
		// return;
	}else{
		params = {"events_id":events_id};
		switch (currentAction){
			case 'detail':
				params = {"events_id":events_id,"speaker":true,"organizer":true};
				break;
			case 'hotel':
				params = {"events_id":events_id,"hotel":true};
				break;
			case 'speaker':
				params = {"events_id":events_id,"speaker":true};
				break;
			case 'rSignUp':
				params = {"events_id":events_id,"roadShow":true};
				break;
			case 'review':
				params = {"events_id":events_id,"review":true};
				break;
		}
	}
	// console.log(events_id);
	//获取动态数据
	$(function(){
		//渲染缓存图片
		$('#topimg').attr('style',localStorage.getItem(events_id));
		getData(params)
	})
	//menu change
	$('.child-menu').click(function(event) {
		window.location.href = $(this).attr('link') + '&events_id=' + events_id;
	});
</script>

<!-- 内容 -->
<div class="total">

	<!--参会报名-->
	<div id="m-sign-up">
		<div class="container">
			<div class="box1Top wow h-title" data-wow-delay="0.5s">
	        	<img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/detail/children/m-title.png" class="img-responsive">
	    	</div>
			<ul class="box1Cen list-unstyled list-inline text-center price-list">
	        	<!-- <li class="wow">
	            	<div class="box1CenCon">
	            		<div class="img-img img-one">
	            			<h4 class="white top"><b>1800元/人</b></h4>
	            			<h4 class="footer">早鸟价</h4>
	            			<p><small>3月1日前报名并付费</small></p>
	            		</div>
	            	</div>
	            </li>-->
	        </ul>
			<div class="box1Cen list-unstyled list-inline text-left table-list">
				<ul class="list-group">
				    <li class="list-group-item text-center top-bg"><h4>会议时间：<span class="events-date">2018/03/21 ~ 2018/03/21</span></h4></li>
				</ul>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>参加人数*</p></label>
						    <!-- <input type="text" class="form-control"> -->
						    <select class="form-control countNum" >
						      <option value='0' selected>请选择</option>
						      <option value='1'>1</option>
						      <option value='2'>2</option>
						      <option value='3'>3</option>
						      <option value='4'>4</option>
						      <option value='5'>5</option>
						      <option value='6'>6</option>
						      <option value='7'>7</option>
						      <option value='8'>8</option>
						      <option value='9'>9</option>
						    </select>
					  	</div>
					</div>
				</div>
				<div class="row" id="userList-single" style="display:none;">
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>姓名*</p></label>
						    <input type="text" class="form-control uname">
					  	</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>职务*</p></label>
						    <input type="text" class="form-control ujob">
					  	</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>电话*</p></label>
						    <input type="text" class="form-control umobile">
					  	</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>邮箱*</p></label>
						    <input type="text" class="form-control uemail">
					  	</div>
					</div>
				</div>
				<div class="row" id="userList">
					
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						    <label for="name"><p>公司名称*</p></label>
						    <input type="text" class="form-control com_name">
					  	</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						    <label for="name"><p>公司发票抬头*</p></label>
						    <input type="text" class="form-control com_Invoices_title">
					  	</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						    <label for="name"><p>公司税号*</p></label>
						    <input type="text" class="form-control com_duty_num">
					  	</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>电话*</p></label>
						    <input type="text" class="form-control com_phone">
					  	</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>传真</p></label>
						    <input type="text" class="form-control com_fax">
					  	</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						    <label for="name"><p>邮政地址*</p></label>
						    <input type="text" class="form-control com_postal_addr">
					  	</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>邮编</p></label>
						    <input type="text" class="form-control com_postal_code">
					  	</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group com_field">
						    <label for="name"><p>所属领域*</p></label>
						    <p class="higher"><input type="radio" name="field" value="1"> 医疗企业/产品领域</p>
						    <p class="higher"><input type="radio" name="field" value="2"> 产业上游/中间服务供应商</p>
						    <p class="higher"><input type="radio" name="field" value="3"> 投资银行/咨询机构/律师事务所/会计事务所</p>
						    <p class="higher"><input type="radio" name="field" value="3"> 医学专家和科研机构</p>
						    <p class="higher"><input type="radio" name="field" value="3"> 医学园区</p>
						    <p class="higher"><input type="radio" name="field" value="3"> 媒体记者</p>
						    <p class="higher"><input type="radio" name="field" value="3"> 其他</p>
					  	</div>
					</div>
					<div class="col-md-6">
						<div class="form-group from_data">
						    <label for="name"><p>您是通过什么平台获知本次会议的</p></label>
						   	<p class="higher"><input type="radio" name="from_data" value="1"> EDM（电子邮件）</p>
						    <p class="higher"><input type="radio" name="from_data" value="2"> 微信</p>
						    <p class="higher"><input type="radio" name="from_data" value="3"> 媒体网站</p>
						    <p class="higher"><input type="radio" name="from_data" value="4"> 网上搜索</p>
						    <p class="higher"><input type="radio" name="from_data" value="5"> 他人推荐</p>
						    <p class="higher"><input type="radio" name="from_data" value="6"> 其他</p>
					  	</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p><small>注意：</small></p>
						<p><small>1.“*” 为必填项，谢谢配合；</small></p>
						<p><small>2.请正确填写个人基本信息，我们将以您提交的参会者姓名为准，制作参会确认函与胸牌；</small></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="text-center">请输入验证码：<input type="text" style="width:15%;" class="verify_code"> <span class="codeVal black" style="background: pink;">8901</span> 为了防止恶意添加资料，请输入验证码</p>
					</div>
				</div>
				<div class="btn-img text-center">
		            <a href="javascript:;"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/detail/children/m-btn.png" alt=""></a>
		        </div>
			</div>

		</div>
	</div>

	<!--关于参会-->
	<div id="m-sign-up-about">
		<div class="container">
	        <div class="box1Top wow h-title" data-wow-delay="0.5s">
	        	<img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/detail/children/m-about.png" class="img-responsive">
	    	</div>
	        <div class="box1Cen warn-list">
	        	<p class="blue"><b>注意事项</b></p>
	        	<div class="attention">
	        		
	        	</div>
				<!-- <p>1、快进看就看见了看借口借口尽快尽快将</p>
				<p>2、快进看就看见了看借口借口尽快尽快将</p>
				<p>3、快进看就看见了看借口借口尽快尽快将</p>
				<p>4、快进看就看见了看借口借口尽快尽快将</p>
				<p>5、快进看就看见了看借口借口尽快尽快将</p>
				<p>6、快进看就看见了看借口借口尽快尽快将</p> -->
				<p class="blue"><b>付费及开票</b></p>
				<div class="cost-intro">
					
				</div>
				<!-- <p>1、快进看就看见了看借口借口尽快尽快将</p>
				<p>2、快进看就看见了看借口借口尽快尽快将</p>
				<p>3、快进看就看见了看借口借口尽快尽快将</p> -->
	        </div>
	    </div>
	</div>

<script type="text/javascript">
	//加载ing
	loadingArr = ['.price-list','.attention','.cost-intro'];
	// var rStr = $('.table-list').html();
	showLoading();
	var showData = function(res){
		// $('.table-list').html(rStr);
		if(res.infoData){
			$('.attention').html(getNewStr(res.infoData.events_register_attention));
			$('.cost-intro').html(getNewStr(res.infoData.events_register_cost_intro));
			$('.events-date').html(res.baseData.events_begin_date + ' ~ '+ res.baseData.events_end_date);
			if(res.infoData.events_register_cost){
				var priceArr = res.infoData.events_register_cost.split("\n");
				var priceStr= '';
				$.each(priceArr, function(index, val) {
					var littleArr = val.split("->");
					priceStr += '<li class="wow"><div class="box1CenCon"><div class="img-img img-one"><h4 class="white top"><b>' + littleArr[1] + '</b></h4><h4 class="footer">' + littleArr[0] + '</h4><p><small>' + littleArr[2] + '</small></p></div></div></li>';
				});
				$('.price-list').html(priceStr);
			}
		}
	}

	var getVerifyCode = function(){
		$.ajax({
			url: '?m=events&a=getVerifyCode',
			type: 'GET',
			success: function(res){
				
				res = $.parseJSON(res);
				console.log(res);
            	if(res.resCode === 200){
					$('.codeVal').html(res.resData.code);
				}else{
					alert('出现异常');
				}
			}
		})
	}

	//报名相关操作
	$(function(){
		getVerifyCode();
		//获取页面相关信息
		$('.countNum').change(function(event) {
			// console.log($('.countNum').val());
			var num = parseInt($('.countNum').val());
			var allStr = '';
			var str = $('#userList-single').html();
			$('#userList').html('');
			for (var i = num; i > 0; i--) {
				allStr += str;
			};
			$('#userList').html(allStr);
		});
		//提交参加报名
		$('.btn-img img').click(function(event) {
			var _cData = {};
			_cData.uData = [];
			// var uData = $('#userList .uname');
			// console.log(uData);
			//获取公司相关数据
			// uData = $('#userList');
			var uNameData = $('#userList .uname');
			var uJobData = $('#userList .ujob');
			var uMobileData = $('#userList .umobile');
			var uEmailData = $('#userList .uemail');
			_cData.countNum = $('.countNum').val();
			_cData.com_name = $('.com_name').val();
			_cData.com_Invoices_title = $('.com_Invoices_title').val();
			_cData.com_duty_num = $('.com_duty_num').val();
			_cData.com_phone = $('.com_phone').val();
			_cData.com_fax = $('.com_fax').val();
			_cData.com_postal_addr = $('.com_postal_addr').val();
			_cData.com_postal_code = $('.com_postal_code').val();
			_cData.com_field = $('.com_field input:radio:checked').val();
			_cData.from = $('.from_data input:radio:checked').val();
			_cData.verify_code = $('.verify_code').val();
			_cData.events_id = events_id;
			//判断必填项是否填写
			if(!_cData.events_id){
				alert('不能获取到会议id');
				return;
			}
			if(!_cData.countNum || _cData.countNum === '0'){
				alert('参加人数不能为空。');
				return;
			}else{
				//判断用户名，职务，电话，邮箱是否匹配
				for (var i = 0; i < uNameData.length; i++) {
					// console.log(uNameData[i].value , uMobileData[i].value , uEmailData[i].value)
					if(uNameData[i] && uNameData[i].value && uJobData[i].value && uMobileData[i].value && uEmailData[i].value){
						_cData.uData.push(
							{
								uname: uNameData[i].value,
								ujob: uJobData[i].value,
								umobile: uMobileData[i].value,
								uemail: uEmailData[i].value
							}
							);
					}else{
						alert('用户名，职务，电话不能为空。');
						return;
					}
				};
				if(_cData.uData.length !== parseInt($('.countNum').val())){
					alert('用户名，职务，电话不能为空');
					return;
				}
				// _cData.uData = JSON.stringify(_cData.uData);
			}
			// console.log(_cData)
			if(!_cData.com_name){
				alert('公司名称不能为空。');
				return;
			}
			if(!_cData.com_Invoices_title){
				alert('公司发票抬头不能为空。');
				return;
			}
			if(!_cData.com_duty_num){
				alert('公司税号不能为空。');
				return;
			}
			if(!_cData.com_phone){
				alert('电话不能为空。');
				return;
			}
			if(!_cData.com_postal_addr){
				alert('邮政地址不能为空。');
				return;
			}
			if(!_cData.com_field){
				alert('所属领域不能为空。');
				return;
			}
			if(!_cData.from){
				alert('您是通过什么平台获知本次会议的不能为空。');
				return;
			}
			if(!_cData.verify_code){
				alert('验证码不能为空。');
				return;
			}
			if(!confirm('确认提交以上信息吗？')){
				return;
			}
			// console.log('all',_cData,JSON.stringify(_cData));

			$.ajax({
				url: '?m=events&a=addMSignUp',
				type: 'POST',
				data: _cData,
				dataType: 'json',
				success: function(res){
					// console.log(res);
					if(res.resData.cid){
						alert('恭喜你！报名成功！');
						$('.countNum').val();
						$('.com_name').val();
						$('.com_Invoices_title').val();
						$('.com_duty_num').val();
						$('.com_phone').val();
						$('.com_fax').val();
						$('.com_postal_addr').val();
						$('.com_postal_code').val();
						$('.com_field input:radio:checked').val();
						$('.from_data input:radio:checked').val();
						$('.verify_code').val();
					}else{
						alert('信息提交失败,' + res.resData);
					}
					getVerifyCode();
				}
			})
			
		});
	})
		
</script>
<!-- INCLUDE ../footer.tpl