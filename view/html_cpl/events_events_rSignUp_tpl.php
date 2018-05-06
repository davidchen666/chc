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
		if(topp > 374){
			$('.detail-menu').css('position','fixed');
			$('.detail-menu').css('top','0px');
		}else{
			$('.detail-menu').css('position', 'relative');
			$('.detail-menu').css('top','93%');
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
/events/' + res.resData.baseData.events_pic + ') center center no-repeat;background-size: 100% 100%;height: 400px;');
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
	<div id="r-sign-up">
		<div class="container">
			<div class="box1Top wow h-title" data-wow-delay="0.5s">
	        	<img src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/detail/children/r-title.png" class="img-responsive">
	    	</div>
			<div class="box1Cen text-center words">
				<h4 class="blue"><b class="road-title"><span ></span><small> </small></b></h4>
				<p class="blue"><b class="road-second-title"></b></p>
				<p class="text-left road-content"></p>
			</div>
			<div class="box1Cen list-unstyled list-inline text-left table-list table-left">
				<ul class="list-group">
				    <li class="list-group-item text-left top-bg"><h4> | &nbsp;&nbsp;活动宗旨</h4></li>
				</ul>
				<div class="words top-null">
					<p class="road-target"></p>
				</div>
			</div>
			<div class="box1Cen list-unstyled list-inline text-left table-list table-left">
				<ul class="list-group">
				    <li class="list-group-item text-left top-bg"><h4> | &nbsp;&nbsp;专业指导</h4></li>
				</ul>
				<div class="words top-null road-guide">
					<!-- <p>内容就快进借口借口借口借口</p>
					<p>内容就快进借口借口借口借口</p>
					<p>内容就快进借口借口借口借口</p>
					<p>内容就快进借口借口借口借口</p>
					<p>内容就快进借口借口借口借口</p> -->
				</div>
			</div>
			<div class="box1Cen list-unstyled list-inline text-left table-list table-left">
				<ul class="list-group">
				    <li class="list-group-item text-left top-bg"><h4> | &nbsp;&nbsp;课程安排</h4></li>
				</ul>
				<div class="words top-null road-course">
					<!-- <p>内容就快进借口借口借口借口</p>
					<p>内容就快进借口借口借口借口</p>
					<p>内容就快进借口借口借口借口</p>
					<p>内容就快进借口借口借口借口</p>
					<p>内容就快进借口借口借口借口</p> -->
				</div>
			</div>
			<div class="box1Cen list-unstyled list-inline text-left table-list table-left">
				<ul class="list-group">
				    <li class="list-group-item text-left top-bg"><h4> | &nbsp;&nbsp;路演项目报名</h4></li>
				</ul>
				<div class="words top-null road-signup-intro">
					<!-- <p>内容就快进借口借口借口借口</p>
					<p>内容就快进借口借口借口借口</p>
					<p>内容就快进借口借口借口借口</p> -->
				</div>
			</div>
			<div class="box1Cen list-unstyled list-inline text-left table-list table-left">
				<ul class="list-group">
				    <li class="list-group-item text-left top-bg"><h4> | &nbsp;&nbsp;您将获得</h4></li>
				</ul>
				<div class="words top-null road-achieve">
					<!-- <p>内容就快进借口借口借内容就快进借口借口借口借口内容就快进借口借口借口借口内容就快进借口借口借口借口口借口</p> -->
				</div>
			</div>
			<div class="box1Cen list-unstyled list-inline text-left table-list road-register">
				<ul class="list-group">
				    <li class="list-group-item text-center top-bg"><h4>会议时间：<span class="events-date"></span>	</h4></li>
				</ul>
				<div class="row top-null">
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>公司名称*</p></label>
						    <input type="text" class="form-control cname">
					  	</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>联系人姓名</p></label>
						    <input type="text" class="form-control uname">
					  	</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>职务</p></label>
						    <input type="text" class="form-control ujob">
					  	</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>电话/手机</p></label>
						    <input type="text" class="form-control umobile">
					  	</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>邮箱</p></label>
						    <input type="text" class="form-control uemail">
					  	</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<p>
							<b>上传商业计划书（仅支持PPT、PDF）</b>
							<!-- <input id="uploadImage" type="file" name="photoimage" class="fimg1"/> -->
							<!-- <a href="javascript:;" class="uploadFile"><input id="file_upload" name="file_upload" type="file" multiple="false">
							</a> -->
						</p>
					</div>
					<div class="col-md-2">
						<input id="file_upload" name="file_upload" type="file" multiple="false">
					</div>
					<div class="col-md-4">
						<span class="msg" style="color:red;"></span>
					</div>
				</div>
				<div class="row words">
					<div class="col-md-12">
						<p><small>1、UIUI欧呼唤呼唤好久好久；</small></p>
						<p><small>2、UIUI欧呼唤呼唤好久好久；</small></p>
						<p><small>3、UIUI欧呼唤呼唤好久好久；</small></p>
						<p><small>4、UIUI欧呼唤呼唤好久好久；</small></p>
					</div>
				</div>
				<div class="btn-img text-center">
		            <a href="###" "email me"><img id="addData" src="<?php
echo $_obj['WEBSITE_SOURCE_URL'];
?>
/img/events/detail/children/sign-btn.png" alt=""></a>
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
	//加载flash
	if (window.ActiveXObject) {
        var s = new ActiveXObject('ShockwaveFlash.ShockwaveFlash');
        if(!s){
            alert('请将您的浏览器设置falsh插件在此网站上始终允许！');
        }
    } else {
        var s = navigator.plugins['Shockwave Flash'];
        if(!s){
            alert('请将您的浏览器设置falsh插件在此网站上始终允许！');
        }
    }
	//渲染数据
	loadingArr = ['.road-content','.road-target','.road-guide','.road-achieve','.road-course','.road-signup-intro'];
	// var rStr = $('.road-register').html();
	showLoading();
	var showData = function(res){
		// $('.road-register').html(rStr);
		if(res.roadShowData){
			var roadObj = res.roadShowData;
			$('.road-title').html(roadObj.road_title);
			$('.road-second-title').html(roadObj.road_second_title);
			$('.road-content').html(getNewStr(roadObj.road_intro));
			$('.road-target').html(getNewStr(roadObj.road_target));
			$('.road-guide').html(getNewStr(roadObj.road_guide));
			$('.road-achieve').html(getNewStr(roadObj.road_achieve));
			$('.road-course').html(getNewStr(roadObj.road_course));
			$('.road-signup-intro').html(getNewStr(roadObj.road_signup_intro));
		}
		$('.events-date').html(res.baseData.events_begin_date + ' ~ '+ res.baseData.events_begin_date);
	}

	//报名
$(function(){
	console.log(111222);
	var fileName = '';
	//upload
	$('#file_upload').uploadify({
		'swf'      : 'public/img/uploadify.swf',
		'uploader' : '?m=events&a=uploadFile',
		'auto'    : true, //是否自动上传 false关闭自动上传 true 选中文件后自动上传
		'buttonClass' : 'mybtn', //自定义按钮的样式
	    // 'buttonImage' : 'public/img/events/detail/children/upload-project.png',
	    'buttonText'  : '选择文件', //按钮显示的字迹
	    //'fileObjName' : 'mytest'  //后台接收的时候就是$_FILES['mytest'] 
	    // 'checkExisting' : '/uploadify/check-exists.php', //检查文件是否已经存在 返回0或者1
	    // 'fileSizeLimit' : '100KB', //上传文件大小的限制
	    // 'fileTypeDesc'  : '你需要一些文件',//可选择的文件的描述
	    // 'fileTypeExts'  : '*.gif; *.jpg; *.png', //文件的允许上传的类型

	     //上传的时候发生的事件
	    'onUploadStart' : function(file){
	      		// console.log('开始上传了');
	      		$('.msg').html(file.name+"开始上传了");
	  	},
	  	 'uploadLimit'   : 10, //设置最大上传文件的数量
	    /*
	    'onUploadComplete' : function(result){
	        for (var i in result.post){
	         alert(i+':::'+result[i]);
	        }
	       },
	    */
	    //文件上传成功的时候
	    'onUploadSuccess' : function(file, data, response) {
	  		fileName = '';
	     	if(data){
	     		 data = $.parseJSON(data)
	     		// console.log('11--',file, '22--',data, '33--',response);
	     		if(data.resCode === 400){
	     			// alert('上传失败！' + data.resData);
	     			$('.msg').html('上传失败！' + data.resData);
	     			return;
	     		}else{
	     			console.log(data.resData);
	     			$('.msg').html(data.resData.name+' 上传成功！');
	     			fileName = data.resData.newname;
	     		}
	     	}
	     	
	    },
	    //
	    'onUploadError' : function(file, errorCode, errorMsg, errorString) {
	    	console.log('1--'+file, '2--'+errorCode, '3--'+errorMsg, '4--'+errorString);
	    	// alert(file.name + '上传失败原因:' + errorString); 
	    },
	    'itemTemplate' : '追加到每个上传节点的html',
	    'height'  : 33, //设置高度 button
	    'width'  : 131, //设置宽度
	    'onDisable' : function(){
	      	alert('您禁止上传');
	    },
	    'onEnable'  : function(){
	      	// alert('您可以继续上传了');
	    },
	    //当文件选中的时候
	    'onSelect'  : function(file){
	      	// alert(file.name+"已经添加到队列");
	      	$('.msg').html(file.name+"已经添加到队列");
	    }

	});
	$('#file_upload-button').css("background","#A6CB42");
	$('#file_upload-button').css("line-height","30px");

	//提交参加报名
	$('#addData').click(function(event) {
		var _cData = {};
		//获取公司相关数据
		_cData.cname = $('.cname').val();
		_cData.uname = $('.uname').val();
		_cData.ujob = $('.ujob').val();
		_cData.umobile = $('.umobile').val();
		_cData.uemail = $('.uemail').val();
		_cData.fname = fileName;
		_cData.events_id = events_id;
		
		//判断必填项是否填写
		if(!_cData.events_id){
			alert('不能获取到会议id');
			return;
		}
		if(!_cData.cname){
			alert('公司名称不能为空。');
			return;
		}
		if(!_cData.uname){
			alert('负责人姓名不能为空。');
			return;
		}
		if(!_cData.ujob){
			alert('负责人职位不能为空。');
			return;
		}
		if(!_cData.umobile){
			alert('负责人电话不能为空。');
			return;
		}
		if(!_cData.uemail){
			alert('负责人邮箱地址不能为空。');
			return;
		}
		if(!_cData.fname){
			alert('请上传商业计划书。');
			return;
		}
		if(!confirm('确认提交以上信息吗？')){
			return;
		}
		// console.log('all',_cData,JSON.stringify(_cData));

		$.ajax({
			url: '?m=events&a=addRSignUp',
			type: 'POST',
			data: _cData,
			dataType: 'json',
			success: function(res){
				console.log(res);
				if(res.resCode === 200){
					if(res.resData.cid){
						alert('恭喜你！报名成功！');
						$('.cname').val('');
						$('.uname').val('');
						$('.ujob').val('');
						$('.umobile').val('');
						$('.uemail').val('');
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