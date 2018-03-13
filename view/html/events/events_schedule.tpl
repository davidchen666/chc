<!-- INCLUDE ../header.tpl -->
<!-- INCLUDE ./header.tpl -->

<!-- 内容 -->
<div class="total">
	<!--会议日程-->
	<div id="events-daily">
		<div class="container">
			<div class="box1Top wow h-title">
	        	<img src="{WEBSITE_SOURCE_URL}/img/events/detail/children/schedule-title.png" class="img-responsive">
	    	</div>
			<div class="box1Cen list-unstyled list-inline table-list">
				<ul class="list-group">
				    <li class="list-group-item text-center top-bg"><h4>3月21日 &nbsp;杭州和达希尔顿逸林酒店</h4></li>
				    <li class="list-group-item"><p>9:00-9:10 <img src="{WEBSITE_SOURCE_URL}/img/events/detail/green-spot.png" alt="">开幕致辞</p></li>
				    <li class="list-group-item"><p>9:00-9:10 <img src="{WEBSITE_SOURCE_URL}/img/events/detail/green-spot.png" alt="">开幕致辞</p></li>
				    <li class="list-group-item"><p>9:00-9:10 <img src="{WEBSITE_SOURCE_URL}/img/events/detail/green-spot.png" alt="">开幕致辞</p></li>
				    <li class="list-group-item"><p>9:00-9:10 <img src="{WEBSITE_SOURCE_URL}/img/events/detail/green-spot.png" alt="">开幕致辞</p></li>
				    <li class="list-group-item"><p>9:00-9:10 <img src="{WEBSITE_SOURCE_URL}/img/events/detail/green-spot.png" alt="">开幕致辞</p></li>
				    <li class="list-group-item"><p>9:00-9:10 <img src="{WEBSITE_SOURCE_URL}/img/events/detail/green-spot.png" alt="">开幕致辞</p></li>
				    <li class="list-group-item"><p>9:00-9:10 <img src="{WEBSITE_SOURCE_URL}/img/events/detail/green-spot.png" alt="">开幕致辞</p></li>
				    <li class="list-group-item"><p>9:00-9:10 <img src="{WEBSITE_SOURCE_URL}/img/events/detail/green-spot.png" alt="">开幕致辞</p></li>
				    <li class="list-group-item"><p>9:00-9:10 <img src="{WEBSITE_SOURCE_URL}/img/events/detail/green-spot.png" alt="">开幕致辞</p></li>
				    <li class="list-group-item"><p>9:00-9:10 <img src="{WEBSITE_SOURCE_URL}/img/events/detail/green-spot.png" alt="">开幕致辞</p></li>
				    <li class="list-group-item"><p>9:00-9:10 <img src="{WEBSITE_SOURCE_URL}/img/events/detail/green-spot.png" alt="">开幕致辞</p></li>
				    <li class="list-group-item"><p>9:00-9:10 <img src="{WEBSITE_SOURCE_URL}/img/events/detail/green-spot.png" alt="">开幕致辞</p></li>
				    <li class="list-group-item"><p>9:00-9:10 <img src="{WEBSITE_SOURCE_URL}/img/events/detail/green-spot.png" alt="">开幕致辞</p></li>
				    <li class="list-group-item"><p>9:00-9:10 <img src="{WEBSITE_SOURCE_URL}/img/events/detail/green-spot.png" alt="">开幕致辞</p></li>
				    <li class="list-group-item"><p>9:00-9:10 <img src="{WEBSITE_SOURCE_URL}/img/events/detail/green-spot.png" alt="">开幕致辞</p></li>
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
		// $('#menu-show li .box1CenCon').css('backgroundImage', '{WEBSITE_SOURCE_URL}/img/events/detail/nav-a-2.png');
		// $('#menu-show .bigger-menu-bg .box1CenCon').css('backgroundImage', '{WEBSITE_SOURCE_URL}/img/events/detail/nav-b-2.png');
		// var objNew = $('#menu-show li .box1CenCon');
		// console.log(objNew);
  //       $.each(objNew, function(index, val) {
  //       	console.log(val);
  //           var defaultStr = val.attr('backgroundImage').replace('-1.png','-2.png');
  //           val.backgroundImage = $(this).css('backgroundImage',defaultStr);
  //       });

		// var bg_old = $(this).css("backgroundImage");
		// console.log(bg_old);
		// var bg_new = bg_old.replace('-2.png','-1.png');
		// $(this).css('backgroundImage', bg_new);
	});
</script>