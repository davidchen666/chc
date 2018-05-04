<!-- 菜单 -->
<div class="detail-top">
	<div class="top-img">
		<div class="detail-menu">
			<div class="container">
				<ul class="box1Cen list-unstyled list-inline text-center" id="menu-show">
		            <li class="wow">
		            	<a href="?m=events&a=detail"><div class="box1CenCon {detail}"><p>首页</p></div></a>
		            </li>
		            <li class="wow">
		                <a href="?m=events&a=about"><div class="box1CenCon {about}"><p>关于会议</p></div></a>
		            </li>
		            <li class="wow">
		                <a href="?m=events&a=schedule"><div class="box1CenCon {schedule}"><p>会议日程</p></div></a>
		            </li>
		            <li class="wow">
		                <a href="?m=events&a=speaker"><div class="box1CenCon {speaker}"><p>演讲嘉宾</p></div></a>
		            </li>
		            <li class="wow">
		                <a href="?m=events&a=hotel"><div class="box1CenCon {hotel}"><p>会议酒店</p></div></a>
		            </li>
		            <li class="wow">
		                <a href="?m=events&a=review"><div class="box1CenCon {review}"><p>历届回顾</p></div></a>
		            </li>
		            <li class="wow bigger-menu-bg">
		                <a href="?m=events&a=mSignUp"><div class="box1CenCon {mSignUp}"><p><img src="{WEBSITE_SOURCE_URL}/img/events/detail/events-record-icon.png"> 参会报名</p></div></a>
		            </li>
		            <li class="wow bigger-menu-bg">
		                <a href="?m=events&a=rSignUp"><div class="box1CenCon {rSignUp}"><p><img src="{WEBSITE_SOURCE_URL}/img/events/detail/road-record-icon.png"> 路演报名</p></div></a>
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
			 $(val).html('<img class="img-responsive center-block" src="{WEBSITE_SOURCE_URL}/img/events/detail/loading.gif" alt="">');
		});
	}

	//请求数据并渲染页面
	var getData = function(params){
		$.ajax({
			url: '?m=events&a=getEventsInfo',
			type: 'POST',
			data: params,
			success: function(res){
				res = $.parseJSON(res);
				console.log(res);
				if(res.resCode !== 200){
					alert(res.resData);
					return false;
				}else{
					showData(res.resData)
					// return res.resData;
				}
			}
		})
	}
	var loadingArr = [];
	var allowAction = ['detail','about','hotel','review','speaker','schedule','mSignUp','rSignUp'];
	var currentAction = getQueryString('a');
	var events_id = getQueryString('events_id');
	var params = {};
	var resData = null;
	if( !events_id || getQueryString('m') !== 'events' || allowAction.indexOf(currentAction) < 0 ){
		alert('访问地址不正确！');
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
		getData(params)
		// resData = getData(params);
		// console.log(resData);
	})
</script>