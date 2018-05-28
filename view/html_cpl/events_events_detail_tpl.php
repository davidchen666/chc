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
	<div class="my-loading"></div>
	<!--关于会议-->
	<div id="intro-list" style="display: none;">
		<div class="container">
			<div class="box1Top wow" data-wow-delay="0.5s">
	        	<img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/detail/about-title.png" class="img-responsive">
	    	</div>
			<div class="box1Cen list-unstyled list-inline text-left word-long about-content">
				<!-- <p>近年来，以微创外科为代表的“手术流程”板块将继续成为增长热点，并将作为未来医学发展的重要方向。微创外科行业内也不断涌现了许多颠覆性的创新产品，如 3D腹腔镜、机器人外科手术系统 及 NOTES 等微创技术。有数据显示，在外科手术器械领域的全球市场规模约150~200亿美元，其中美国约占30%市场份额，而中国的市场份额为8%，对比欧美成熟市场，中国市场还有很大的提升空间。</p>
				<p>在此背景下， CHC医疗咨询将主办第三届中国微创外科及手术机器人产业投资CEO论坛，以“百亿市场下的微创外科精准治疗”为主题，邀请全球微创外科临床专家、产业界以及专业投资者，共同探讨微创技术在中国的创新发展及手术机器人在微创外科产业的应用趋势。届时，来自美敦力，强生，波士顿科学， Stryker， Karl Storz，Olympus，乐普，迈瑞，瑞奇外科，法兰克曼、安瀚医疗等全球微创外科领军企业将受邀参加论坛发言，共话中国微创技术新发展。</p> -->
			</div>
		</div>
	</div>

	<!--演讲嘉宾-->
	<div id="speaker-list" style="display: none;">
		<div class="container">
			<div class="box1Top wow" data-wow-delay="0.5s">
	        	<img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/detail/speaker.png" class="img-responsive">
	    	</div>
			<ul class="box1Cen list-unstyled list-inline text-center" >
	            <!-- <li class="wow">
	                <div class="box1CenCon">
	                	<img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/detail/speaker-1.jpg" class="img-responsive img-circle">
	                	<h4>郑民华</h4>
	                	<p><small>山蓝资本创始及执行合伙人</small></p>
	                </div>
	            </li>-->
	        </ul>
	        <div class="btn-img text-center">
	            <a href="javascript:;" target="_blank" class="getMoreSpeaker"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/detail/more-speaker.png" alt=""></a>
	        </div> 
		</div>
	</div>

	<!--会议日程-->
	<div id="events-daily" style="display: none;">
		<div class="container">
			<div class="box1Top wow">
	        	<img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/detail/events-title.png" class="img-responsive">
	    	</div>
			<div class="box1Cen list-unstyled list-inline text-left table-list">
				<ul class="list-group">
				    <li class="list-group-item text-center top-bg"><h4 class="title"></h4></li>
				    <span class="list">
				    <!-- <li class="list-group-item"><p>9:00-9:10 <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/detail/green-spot.png" alt="">开幕致辞</p></li>-->
				    </span>
				</ul>
				<div class="btn-img text-center">
		            <a href="javascript:;" target="_blank" class="getMoreSchedule"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/detail/more-shedule.png" alt=""></a>
		        </div>
			</div>
		</div>
	</div>
	
	<!--历届精彩瞬间-->
	<div id="past-moment" style="display:none;">
		<div class="container">
			<div class="box1Top wow">
	        	<img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/detail/past-moment.png" class="img-responsive">
	    	</div>
			<div class="box1Cen list-unstyled list-inline text-left">
				<div class="row">
					<div class="col-md-2"><div class="pic-th pic-small"></div></div>
					<div class="col-md-4"><div class="pic-th pic-big"></div></div>
					<div class="col-md-4"><div class="pic-th pic-big"></div></div>
					<div class="col-md-2"><div class="pic-th pic-small"></div></div>
				</div>
				<div class="row">
					<div class="col-md-4"><div class="pic-th pic-big"></div></div>
					<div class="col-md-4"><div class="pic-th pic-big"></div></div>
					<div class="col-md-4"><div class="pic-th pic-big"></div></div>
				</div>
				<div class="row">
					<div class="col-md-2"><div class="pic-th pic-small"></div></div>
					<div class="col-md-4"><div class="pic-th pic-big"></div></div>
					<div class="col-md-4"><div class="pic-th pic-big"></div></div>
					<div class="col-md-2"><div class="pic-th pic-small"></div></div>
				</div>
			</div>
		</div>
	</div>

	<!--组织架构-->
	<div id="organize" style="display: none;">
		<div class="container">
			<div class="box1Top wow">
	        	<img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/detail/organize-title.png" class="img-responsive">
	    	</div>
			
			<!--主办方-->
			<div class="organizer-total" style="display: none;">
				<div class="box1Cen list-unstyled list-inline text-left header-title">
					<ul class="list-group">
					    <li class="list-group-item text-center top-bg"><h4>主办方/organizer</h4></li>
					</ul>
				</div>
				<ul class="box1Cen list-unstyled list-inline text-center organize-show organizer">
		            <!-- <li class="wow">
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
		            </li> -->
		        </ul>
			</div>
			
			<!--协办方-->
			<div class="co-organizer-total" style="display: none;">
				<div class="box1Cen list-unstyled list-inline text-left header-title">
					<ul class="list-group">
					    <li class="list-group-item text-center top-bg"><h4>协办方/co-organizer</h4></li>
					</ul>
				</div>
				<ul class="box1Cen list-unstyled list-inline text-center organize-show co-organizer">
		            <!-- <li class="wow">
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
		            </li> -->
		        </ul>
			</div>
				
	        <!--战略合作伙伴-->
	        <div class="starategic-partner-total" style="display: none;">
	        	<div class="box1Cen list-unstyled list-inline text-left header-title">
					<ul class="list-group">
					    <li class="list-group-item text-center top-bg"><h4>战略合作伙伴/starategic partner</h4></li>
					</ul>
				</div>
				<ul class="box1Cen list-unstyled list-inline text-center organize-show starategic-partner">
		            <!-- <li class="wow">
		                <div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/ali.png" class="img-responsive"></div>
		            </li>-->
		        </ul>
	        </div>
				
	        <!--媒体支持-->
	        <div class="media-support-total" style="display: none;">
	        	<div class="box1Cen list-unstyled list-inline text-left header-title">
					<ul class="list-group">
					    <li class="list-group-item text-center top-bg"><h4>媒体支持/media support</h4></li>
					</ul>
				</div>
				<ul class="box1Cen list-unstyled list-inline text-center organize-show media-support">
		            <!-- <li class="wow">
		                <div class="box1CenCon"><img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/ali.png" class="img-responsive"></div>
		            </li>-->
		        </ul>
	        </div>
				
			<!--底部-->
			<div class="box1Cen list-unstyled list-inline text-left">
				<div class="row">
					<div class="col-md-4">
						<div class="single-intro">
							<div class="left-show">
								<img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/detail/1icon.png" class="img-responsive"></div>
							<div class="right-show">
								<h5>参会/赞助支持</h5>
								<p><small>电话：+86 021-68581027</small></p>
								<p><small>邮箱：registration@chconsultant.com</small></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-intro">
							<div class="left-show">
								<img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/detail/2icon.png" class="img-responsive"></div>
							<div class="right-show">
								<h5>路演项目对接</h5>
								<p><small>电话：+86 021-50726900</small></p>
								<p><small>邮箱：project@chconsultant.com</small></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-intro">
							<div class="left-show">
								<img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/detail/3icon.png" class="img-responsive"></div>
							<div class="right-show">
								<h5>媒体合作</h5>
								<p><small>电话：+86 021-50726900</small></p>
								<p><small>邮箱：info@chconsultant.com</small></p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

</div>

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
<script type="text/javascript">
	loadingArr = ['#intro-list .about-content','#speaker-list ul','#events-daily .list','#events-daily .list','.organizer','.co-organizer','.starategic-partner','.media-support','.my-loading']
	showLoading();
	// 渲染动态数据
	var showData = function(res){
		//关于会议
		if(res.infoData.events_about_simple){
			$('#intro-list').show();
			$('#intro-list .about-content').html(getNewStr(res.infoData.events_about_simple));
		}else{
			// $('#intro-list .about-content').html(getNewStr(res.infoData.events_about));
			// $()
		}

		//演讲嘉宾
		if(res.speakerData.events_speaker_simple && JSON.stringify(res.speakerData.events_speaker_simple) !== '[]'){
			var totalStr = '';
			$.each(res.speakerData.events_speaker_simple, function(index, val) {
				totalStr += '<li class="wow"><div class="box1CenCon"><img src="<?php
echo $_obj['imgPath'];
?>
/speaker/' + val.speaker_pic +'" class="img-responsive img-circle"><h4>' + val.speaker_name + '</h4><p><small>' + val.speaker_identity + '</small></p></div></li>';
			});
			
			//主讲嘉宾
			// if(res.speakerData.events_speaker_main){
			// 	$.each(res.speakerData.events_speaker_main, function(index, val) {
			// 		totalStr += '<li class="wow"><div class="box1CenCon"><img src="<?php
echo $_obj['imgPath'];
?>
/speaker/' + val.speaker_pic +'" class="img-responsive img-circle"><h4>' + val.speaker_name + '</h4><p><small>' + val.speaker_identity + '</small></p></div></li>';
			// 	});
			// }
			// //邀请嘉宾
			// if(res.speakerData.events_speaker_invite){
			// 	$.each(res.speakerData.events_speaker_invite, function(index, val) {
			// 		totalStr += '<li class="wow"><div class="box1CenCon"><img src="<?php
echo $_obj['imgPath'];
?>
/speaker/' + val.speaker_pic +'" class="img-responsive img-circle"><h4>' + val.speaker_name + '</h4><p><small>' + val.speaker_identity + '</small></p></div></li>';
			// 	});
			// }
			//补充
			if(res.speakerData.events_speaker_simple.length % 5 != 0){
				var num = 5 - (res.speakerData.events_speaker_simple.length % 5);
				for (var i = 1; i <= num; i++) {
					totalStr += '<li></li>';
				}
			}
			$('#speaker-list').show();
			$('#speaker-list ul').html(totalStr);
		}

		//会议日程
		$('#events-daily .title').html(res.infoData.events_schedule_title);
		if(res.infoData.events_schedule_content_simple){
			$('#events-daily').show();
			var sContent = res.infoData.events_schedule_content_simple ;
			var scheduleArr = sContent.split("\n");
			var scheduleStr = '';
			$.each(scheduleArr, function(index, val) {
				var littleArr = [];
				littleArr = val.split("->");
				 if(val && littleArr.length === 2){
				 	scheduleStr += '<li class="list-group-item"><p>' + littleArr[0] + ' <img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/detail/green-spot.png" alt="">' + littleArr[1] + '</p></li>';
				 }
			});
			$('#events-daily .list').html(scheduleStr);
		}

		//组织架构
		if(res.organizerData){
			if(res.organizerData.events_organizer_organizer && JSON.stringify(res.organizerData.events_organizer_organizer) !== '[]'){
				var organizerStr = '';
				$.each(res.organizerData.events_organizer_organizer, function(index, val) {
					var linkUrl = 'javascript:;';
					if(val.media_url){
						linkUrl = 'http://'+ val.media_url ;
					}
					 organizerStr += '<li class="wow"><a href="'+ linkUrl +'" target="_blank"><div class="box1CenCon logo-show"><img src="<?php
echo $_obj['imgPath'];
?>
/media/' + val.media_pic + '" class="img-responsive"></div></a></li>';
				});
				$('.organizer').html(organizerStr);
				
				$('#organize').show();
				$('.organizer-total').show();
			}
			if(res.organizerData.events_organizer_co_organizer && JSON.stringify(res.organizerData.events_organizer_co_organizer) !== '[]'){
				var coOrganizerStr = '';
				$.each(res.organizerData.events_organizer_co_organizer, function(index, val) {
					var linkUrl = 'javascript:;';
					if(val.media_url){
						linkUrl = 'http://'+ val.media_url ;
					}
					 coOrganizerStr += '<li class="wow"><a href="'+ linkUrl +'" target="_blank"><div class="box1CenCon logo-show"><img src="<?php
echo $_obj['imgPath'];
?>
/media/' + val.media_pic + '" class="img-responsive"></div></a></li>';
				});
				$('.co-organizer').html(coOrganizerStr);
				$('#organize').show();
				$('.co-organizer-total').show();
			}
			if(res.organizerData.events_organizer_starategic_partner && JSON.stringify(res.organizerData.events_organizer_starategic_partner) !== '[]'){
				var starategicOrganizerStr = '';
				$.each(res.organizerData.events_organizer_starategic_partner, function(index, val) {
					var linkUrl = 'javascript:;';
					if(val.media_url){
						linkUrl = 'http://'+ val.media_url ;
					}
					 starategicOrganizerStr += '<li class="wow"><a href="'+ linkUrl +'" target="_blank"><div class="box1CenCon logo-show"><img src="<?php
echo $_obj['imgPath'];
?>
/media/' + val.media_pic + '" class="img-responsive"></div></a></li>';
				});
				$('.starategic-partner').html(starategicOrganizerStr);
				$('#organize').show();
				$('.starategic-partner-total').show();
			}
			if(res.organizerData.events_organizer_media_support && JSON.stringify(res.organizerData.events_organizer_media_support) !== '[]'){
				var mediaOrganizerStr = '';
				$.each(res.organizerData.events_organizer_media_support, function(index, val) {
					var linkUrl = 'javascript:;';
					if(val.media_url){
						linkUrl = 'http://'+ val.media_url ;
					}
					mediaOrganizerStr += '<li class="wow"><a href="'+ linkUrl +'" target="_blank"><div class="box1CenCon logo-show"><img src="<?php
echo $_obj['imgPath'];
?>
/media/' + val.media_pic + '" class="img-responsive"></div></a></li>';
				});
				$('.media-support').html(mediaOrganizerStr);
				$('#organize').show();
				$('.media-support-total').show();
			}

		}
	}

	$('.getMoreSpeaker').click(function(event) {
		window.location.href = '?m=events&a=speaker&events_id='+events_id;
	});
	
	$('.getMoreSchedule').click(function(event) {
		window.location.href = '?m=events&a=schedule&events_id='+events_id;
	});
</script>