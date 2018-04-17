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
</script>