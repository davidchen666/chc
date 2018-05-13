<!-- INCLUDE ../header.tpl -->
<!-- INCLUDE ./header.tpl -->

<!-- 内容 -->
<div class="total">
	<div class="my-loading"></div>
	<!--会议日程-->
	<div id="events-daily" style="display: none;">
		<div class="container">
			<div class="box1Top wow h-title">
	        	<img src="{WEBSITE_SOURCE_URL}/img/events/detail/children/schedule-title.png" class="img-responsive">
	    	</div>
			<div class="box1Cen list-unstyled list-inline table-list">
				<ul class="list-group">
				    <li class="list-group-item text-center top-bg"><h4 class="title"></h4></li>
				    <span class="list"></span>
				    <!-- <li class="list-group-item"><p>9:00-9:10 <img src="{WEBSITE_SOURCE_URL}/img/events/detail/green-spot.png" alt="">开幕致辞</p></li> -->
				    
				</ul>
				<div class="btn-img text-center">
		            <a href="javascript:;"></a>
		        </div>
			</div>
		</div>
	</div>

</div>

<!-- INCLUDE ../footer.tpl -->
<script>
	$('#menu-show li .box1CenCon').click(function(event) {
		$('#menu-show li .box1CenCon').attr('class', 'box1CenCon');
		$('#menu-show .bigger-menu-bg .box1CenCon').attr('class', 'box1CenCon');
		$(this).attr('class', 'box1CenCon activemenu');
	});

	loadingArr = ['.my-loading'];
	showLoading();

	var showData = function(res){
		//会议日程
		
		if(res.infoData.events_schedule_content && res.infoData.events_schedule_title){
			$('#events-daily .title').html(res.infoData.events_schedule_title);
			var scheduleArr = res.infoData.events_schedule_content.split("\n");
			var scheduleStr = '';
			$.each(scheduleArr, function(index, val) {
				var littleArr = [];
				littleArr = val.split("->");
				 if(val && littleArr.length === 2){
				 	scheduleStr += '<li class="list-group-item"><p>' + littleArr[0] + ' <img src="{WEBSITE_SOURCE_URL}/img/events/detail/green-spot.png" alt="">' + littleArr[1] + '</p></li>';
				 }
			});
			$('#events-daily .list').html(scheduleStr);
			$('#events-daily').show();
		}
	}
		
</script>